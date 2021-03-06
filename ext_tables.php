<?php
//TODO: whole file is deprecated since TYPO3 7.3. Move content to <your_extension>/Configuration/TCA/Overrides/pages.php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Thucke.' . $_EXTKEY,	// The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'Pi1',		// A unique name of the plugin in UpperCamelCase
	'Rating AX'	// A title shown in the backend dropdown field
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('th_rating', 'Configuration/TypoScript', 'Rating AX');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thrating_domain_model_ratingobject');
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/Flexforms/flexform_pi1.xml');
?>