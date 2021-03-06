<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Define the TCA for the access control calendar selector.
$skinSelector = array(
	'skin_selector' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila_framework/Resources/Private/Language/locallang_db.xlf:skinSelectorLabel',
		'config' => array(
			'type' => 'user',
			'userFunc' => 'BusyNoggin\\TemplavoilaFramework\\Utility\\SkinSelector->display',
		)
	),
);

// Add the skin selector for backend users.
if (version_compare(TYPO3_branch, '6.1', '<')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_template');
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_template', $skinSelector);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_template', '--div--;LLL:EXT:templavoila_framework/Resources/Private/Language/locallang_db.xlf:skinSelectorTab, skin_selector');

// Only show the current FCE icon.
$GLOBALS['TCA']['tt_content']['columns']['tx_templavoila_to']['config']['suppress_icons'] = 'ONLY_SELECTED';

?>
