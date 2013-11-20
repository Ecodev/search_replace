<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Add sprites
\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons(
	array(
		'ecopatterns' => TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/tx_ecopatterns.png',
	),
	$_EXTKEY
);

// Make sure the class exists to avoid a Runtime Error
if (TYPO3_MODE == 'BE' && class_exists('TYPO3\CMS\Vidi\ModuleLoader')) {

	/** @var \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager */
	$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');

	/** @var \TYPO3\CMS\Extensionmanager\Utility\ConfigurationUtility $configurationUtility */
	$configurationUtility = $objectManager->get('TYPO3\CMS\Extensionmanager\Utility\ConfigurationUtility');
	$configuration = $configurationUtility->getCurrentConfiguration('vidi');

	$dataTypes = array('tx_ecopatterns');

	// Loop around the data types and register them to be displayed within a BE module.
	foreach ($dataTypes as $dataType) {

		/** @var \TYPO3\CMS\Vidi\ModuleLoader $moduleLoader */
		$moduleLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Vidi\ModuleLoader', $dataType);
		$moduleLoader->setIcon(sprintf('EXT:search_replace/Resources/Public/Images/%s.png', $dataType))
			->setModuleLanguageFile(sprintf('LLL:EXT:search_replace/Resources/Private/Language/%s.xlf', $dataType))
			->addJavaScriptFiles(array(sprintf('EXT:search_replace/Resources/Public/JavaScript/Backend/%s.js', $dataType)))
			->addStyleSheetFiles(array(sprintf('EXT:search_replace/Resources/Public/StyleSheets/Backend/%s.css', $dataType)))
			->setDefaultPid($configuration['default_pid']['value'])
			->register();

		// Trick for handling TCA which is not placed following TCA convention - which happened in TYPO3 6.1.
		if (empty($GLOBALS['TCA'][$dataType]['grid'])) {
			$fileNameAndPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('search_replace') . 'Configuration/TCA/' . $dataType . '.php';
			$GLOBALS['TCA'][$dataType] = require($fileNameAndPath);
		}
	}
}
?>