<?php

return array(
	'ctrl' => array(
		'title' => 'LLL:EXT:search_replace/Resources/Private/Language/tx_ecopatterns.xlf:tx_ecopatterns',
		'label' => 'search_pattern',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'delete' => 'deleted',
		'default_sortby' => 'ORDER BY uid ASC',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'typeicon_classes' => array(
			'default' => 'extensions-search_replace-ecopatterns',
		),
		'searchFields' => 'uid, search_pattern, replace_pattern, comment',
		'dividers2tabs' => 1,
	),
	'types' => array(
		'0' => array('showitem' => 'search_pattern, replace_pattern, comment'),
	),
	'columns' => array(
		'search_pattern' => array(
			'label' => 'LLL:EXT:search_replace/Resources/Private/Language/tx_ecopatterns.xlf:tx_ecopatterns.search_pattern',
			'config' => array(
				'type' => 'input',
				'size' => 255,
				'eval' => 'trim',
			)
		),
		'replace_pattern' => array(
			'label' => 'LLL:EXT:search_replace/Resources/Private/Language/tx_ecopatterns.xlf:tx_ecopatterns.replace_pattern',
			'config' => array(
				'type' => 'input',
				'size' => 255,
				'eval' => 'trim',
			)
		),
		'comment' => array(
			'label' => 'LLL:EXT:search_replace/Resources/Private/Language/tx_ecopatterns.xlf:tx_ecopatterns.comment',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim'
			)
		),
	),
	'grid' => array(
		'facets' => array(
			'uid',
			'search_pattern',
			'replace_pattern',
		),
		'columns' => array(
			'__checkbox' => array(
				'width' => '5px',
				'sortable' => FALSE,
				'html' => '<input type="checkbox" class="checkbox-row-top"/>',
			),
			'uid' => array(
				'visible' => FALSE,
				'label' => 'LLL:EXT:search_replace/Resources/Private/Language/tx_ecopatterns.xlf:tx_ecopatterns.uid',
				'width' => '5px',
			),
			'search_pattern' => array(
				'editable' => TRUE,
			),
			'replace_pattern' => array(
				'editable' => TRUE,
			),
			'comment' => array(
				'visible' => FALSE,
				'editable' => TRUE,
			),
			'__buttons' => array(
				'sortable' => FALSE,
				'width' => '70px',
			),
		)
	)
);
?>