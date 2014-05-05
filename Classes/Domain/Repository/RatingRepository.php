<?php
namespace Thucke\ThRating\Domain\Repository;
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas Hucke <thucke@web.de> 
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * A repository for ratings
 */
class RatingRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {			

	/**
	 * Defines name for function parameter
	 *
	 */
	const addIfNotFound = TRUE;

	/**
	 * @var \Thucke\ThRating\Service\ObjectFactoryService $objectFactoryService
	 */
	protected $objectFactoryService;
	/**
	 * @param	\Thucke\ThRating\Service\ObjectFactoryService $objectFactoryService
	 * @return	void
	 */
	public function injectObjectFactoryService( \Thucke\ThRating\Service\ObjectFactoryService $objectFactoryService ) {
		$this->objectFactoryService = $objectFactoryService;
	}

	/**
	 * Finds the specific rating by giving the object and row uid
	 *
	 * @param	\Thucke\ThRating\Domain\Model\Ratingobject	$ratingobject 	The concerned ratingobject
	 * @param	int 										$ratedobjectuid The Uid of the rated row
	 * @param	bool										$addIfNotFound	Set to true if new objects should instantly be added
	 * @validate $ratingobject \Thucke\ThRating\Domain\Validator\RatingobjectValidator
	 * @validate $ratedobjectuid NumberRange(minimum = 1)
	 * @return \Thucke\ThRating\Domain\Model\Rating 		The rating
	 */
	public function findMatchingObjectAndUid($ratingobject, $ratedobjectuid, $addIfNotFound = FALSE ) {
		$query = $this->createQuery();
		$query	->matching(
						$query->logicalAnd(
							$query->equals('ratingobject', $ratingobject->getUid()),
							$query->equals('ratedobjectuid', $ratedobjectuid)
							)
						)
					->setLimit(1);
		$queryResult = $query->execute();
		if ($queryResult->count() != 0) {
			$foundRow = $queryResult->getFirst();
			//Cope with an obviuos bug in TYPO3 6.1 that $queryResult->getFirst() doesn�t return the fully loaded object
			If ( \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < 6002000 ) {
				$dummy = \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($foundRow, 'dummy', 2, TRUE, FALSE, TRUE);
			}
		} else {
			if ($addIfNotFound) {
				$foundRow = $this->objectManager->get('Thucke\\ThRating\\Domain\\Model\\Rating');
				$foundRow->setRatingobject($ratingobject);
				$foundRow->setRatedobjectuid($ratedobjectuid);	
				$foundRow->injectObjectManager($objectManager);
				$validator = $this->objectManager->get('Thucke\\ThRating\\Domain\\Validator\\RatingValidator');
				if ($validator->isValid($foundRow)) {
					$this->add($foundRow);
				}
				$this->objectFactoryService->persistRepository('Thucke\\ThRating\\Domain\\Repository\\RatingRepository', $foundRow);	
				$foundRow = $this->findMatchingObjectAndUid($ratingobject, $ratedobjectuid);
			} else {
				unset($foundRow);
			}
		}
		return $foundRow;
	}
}
?>