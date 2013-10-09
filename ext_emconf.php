<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "th_rating".
 *
 * Auto generated 09-10-2013 21:13
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Rating AX',
	'description' => 'Inspired by the extentsion \'ratings\' and \'tt_rating\' moved to extbase/fluid. Allows multiple AJAX ratings (jQuery) within one page. Flexible usage as a cObj especially in other extensions. A rating is not only done using numbers. Each ratingstep could also have a name - international localization included.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.7.6',
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Thomas Hucke',
	'author_email' => 'thucke@web.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-4.6.99',
			'static_info_tables' => '2.1.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'xliff' => '1.0.1-',
		),
	),
	'_md5_values_when_last_written' => 'a:130:{s:11:"changes.txt";s:4:"0dac";s:16:"ext_autoload.php";s:4:"ad1e";s:12:"ext_icon.gif";s:4:"de07";s:17:"ext_localconf.php";s:4:"56b7";s:14:"ext_tables.php";s:4:"9b7d";s:14:"ext_tables.sql";s:4:"e4e7";s:24:"ext_typoscript_setup.txt";s:4:"c7d1";s:12:"t3jquery.txt";s:4:"de72";s:37:"Classes/Controller/VoteController.php";s:4:"ecea";s:31:"Classes/Domain/Model/Rating.php";s:4:"7f9c";s:37:"Classes/Domain/Model/Ratingobject.php";s:4:"6bbf";s:33:"Classes/Domain/Model/Stepconf.php";s:4:"97ec";s:32:"Classes/Domain/Model/Syslang.php";s:4:"6705";s:29:"Classes/Domain/Model/Vote.php";s:4:"0718";s:30:"Classes/Domain/Model/Voter.php";s:4:"c408";s:52:"Classes/Domain/Repository/RatingobjectRepository.php";s:4:"3463";s:46:"Classes/Domain/Repository/RatingRepository.php";s:4:"8559";s:48:"Classes/Domain/Repository/StepconfRepository.php";s:4:"0923";s:47:"Classes/Domain/Repository/SyslangRepository.php";s:4:"485d";s:44:"Classes/Domain/Repository/VoteRepository.php";s:4:"5d34";s:45:"Classes/Domain/Repository/VoterRepository.php";s:4:"94ac";s:50:"Classes/Domain/Validator/RatingobjectValidator.php";s:4:"dbd8";s:44:"Classes/Domain/Validator/RatingValidator.php";s:4:"56c4";s:46:"Classes/Domain/Validator/StepconfValidator.php";s:4:"66f9";s:42:"Classes/Domain/Validator/VoteValidator.php";s:4:"4cb8";s:40:"Classes/Service/AccessControlService.php";s:4:"4318";s:35:"Classes/Service/AccessException.php";s:4:"cdf7";s:33:"Classes/Service/CookieService.php";s:4:"76ee";s:40:"Classes/Service/ObjectFactoryService.php";s:4:"4c74";s:46:"Classes/Utility/ExtensionManagementUtility.php";s:4:"5119";s:44:"Classes/ViewHelpers/RatinglinkViewHelper.php";s:4:"0d8f";s:40:"Classes/ViewHelpers/RatingViewHelper.php";s:4:"ae35";s:40:"Classes/ViewHelpers/SelectViewHelper.php";s:4:"7376";s:40:"Configuration/Flexforms/flexform_pi1.xml";s:4:"99dc";s:53:"Configuration/TCA/tx_thrating_domain_model_rating.php";s:4:"ff39";s:59:"Configuration/TCA/tx_thrating_domain_model_ratingobject.php";s:4:"b8fc";s:55:"Configuration/TCA/tx_thrating_domain_model_stepconf.php";s:4:"2e8b";s:51:"Configuration/TCA/tx_thrating_domain_model_vote.php";s:4:"da46";s:38:"Configuration/TypoScript/constants.txt";s:4:"94b3";s:34:"Configuration/TypoScript/setup.txt";s:4:"ae35";s:38:"Documentation/Manual/defaultLayout.gif";s:4:"08bb";s:38:"Documentation/Manual/defaultLayout.odp";s:4:"960a";s:31:"Documentation/Manual/manual.txt";s:4:"f3d3";s:38:"Documentation/Model/Umlet/en/Model.uxf";s:4:"e947";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"509d";s:40:"Resources/Private/Language/locallang.xlf";s:4:"a0e8";s:40:"Resources/Private/Language/locallang.xml";s:4:"ac76";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"62ef";s:41:"Resources/Private/Partials/infoBlock.html";s:4:"c4c2";s:47:"Resources/Private/Partials/ratinglinkBlock.html";s:4:"3893";s:43:"Resources/Private/Partials/usersRating.html";s:4:"2a09";s:47:"Resources/Private/Templates/singletonInput.html";s:4:"878d";s:43:"Resources/Private/Templates/Vote/Index.html";s:4:"eccc";s:41:"Resources/Private/Templates/Vote/New.html";s:4:"3469";s:49:"Resources/Private/Templates/Vote/Ratinglinks.html";s:4:"6be9";s:42:"Resources/Private/Templates/Vote/Show.html";s:4:"ac9e";s:47:"Resources/Private/Templates/Vote/Singleton.html";s:4:"7052";s:61:"Resources/Public/Classes/BE.tx_thrating_unlinkDynCss_eval.php";s:4:"abcc";s:40:"Resources/Public/Classes/BE.userFunc.php";s:4:"72a0";s:37:"Resources/Public/Css/facesbarTilt.gif";s:4:"daea";s:35:"Resources/Public/Css/rating_bar.png";s:4:"1057";s:31:"Resources/Public/Css/smiley.gif";s:4:"48cb";s:30:"Resources/Public/Css/stars.gif";s:4:"9cdb";s:34:"Resources/Public/Css/starsTilt.gif";s:4:"9d77";s:31:"Resources/Public/Css/styles.css";s:4:"ddf2";s:44:"Resources/Public/Css/Graphics/rating_bar.svg";s:4:"5ea9";s:50:"Resources/Public/Css/Graphics/rating_bar_plain.svg";s:4:"5713";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-2.png";s:4:"fe91";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-3.png";s:4:"2a69";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-4.png";s:4:"083c";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new-5.png";s:4:"cf1a";s:91:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new-list-3.png";s:4:"6946";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new.png";s:4:"6fcf";s:87:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-silver.png";s:4:"ce0c";s:90:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar-2.png";s:4:"92e3";s:90:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar-3.png";s:4:"fb12";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar.png";s:4:"65aa";s:77:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/stars.xcf";s:4:"067d";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/starsTilt.xcf";s:4:"3849";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-angry.png";s:4:"31a4";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-cool.png";s:4:"7b81";s:85:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-devilish.png";s:4:"8931";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-embarrassed.png";s:4:"9fb2";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-laugh.png";s:4:"5487";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-monkey.png";s:4:"b3d1";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-plain-2.png";s:4:"4984";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-plain.png";s:4:"beb8";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-raspberry-2.png";s:4:"a692";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-sad-2.png";s:4:"f859";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-smile-3.png";s:4:"069e";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-smirk.png";s:4:"a663";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-uncertain.png";s:4:"28cd";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink-2.png";s:4:"3916";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink-3.png";s:4:"fa85";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink.png";s:4:"740e";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-worried.png";s:4:"952d";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/facesbarTilt.xcf";s:4:"27b4";s:123:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/pictograms-road_signs-10_downward_gradient_roadsign.png";s:4:"4805";s:78:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/smiley.xcf";s:4:"5d00";s:104:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictogram-din-e011-meeting_point.png";s:4:"23e4";s:98:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictograms-hazard_signs-29.png";s:4:"5676";s:97:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictographs-stairs_up_inv.png";s:4:"9855";s:110:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/road-sign-us-mutcd-w21-1a-construction.png";s:4:"fbe4";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-angry.svg";s:4:"2a3e";s:79:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-cool.svg";s:4:"c49a";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-devilish.svg";s:4:"fd03";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-embarrassed.svg";s:4:"adef";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-laugh.svg";s:4:"7486";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-monkey.svg";s:4:"ae2c";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-plain.svg";s:4:"e258";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-raspberry-2.svg";s:4:"941c";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-sad-2.svg";s:4:"22b5";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-smirk.svg";s:4:"2687";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-uncertain.svg";s:4:"de5f";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-wink-2.svg";s:4:"784e";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-worried.svg";s:4:"2226";s:121:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/pictograms-road_signs-10_downward_gradient_roadsign.svg";s:4:"ed96";s:58:"Resources/Public/Icons/tx_thrating_domain_model_rating.gif";s:4:"de07";s:64:"Resources/Public/Icons/tx_thrating_domain_model_ratingobject.gif";s:4:"2c15";s:60:"Resources/Public/Icons/tx_thrating_domain_model_stepconf.gif";s:4:"ab19";s:56:"Resources/Public/Icons/tx_thrating_domain_model_vote.gif";s:4:"fe33";s:30:"Resources/Public/Js/actions.js";s:4:"aca1";s:34:"Resources/Public/Js/jquery.form.js";s:4:"7a63";s:39:"Tests/Domain/Model/RatingobjectTest.php";s:4:"33c0";s:33:"Tests/Domain/Model/RatingTest.php";s:4:"359e";s:37:"Tests/Domain/Model/StepconfigTest.php";s:4:"a020";s:31:"Tests/Domain/Model/VoteTest.php";s:4:"bcc7";s:53:"Tests/Domain/Repository/RatingobjectRepositoryTest.ph";s:4:"2d0e";s:14:"doc/manual.sxw";s:4:"441d";s:14:"doc/manual.txt";s:4:"f3d3";}',
	'suggests' => array(
	),
);

?>