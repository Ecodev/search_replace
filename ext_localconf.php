<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
if (TYPO3_MODE == 'FE') {
	require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('search_replace').'class.tx_ecopatterns.php';
	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all'][] = 'tx_ecopatterns->replacePatterns';
}
?>
