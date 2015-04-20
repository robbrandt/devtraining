<?php
/**
 * Declare a report-template which should be activated whenever this module is enabled
 */
return array( 
	0 => 
	array(
    'name' => 'CustomCounty',
    'entity' => 'CustomField',
    'params' => array(
      'version' => 3,
      'custom_group_id' => civicrm_api3('CustomGroup', 'getvalue', array(
        'name' => "constituent_information",
        'return' => "id",
      )),
      'name' => 'County',
      'label' => 'Custom County Field',
      'description' => 'This is a custom field containing the County',
      'data_type' => 'String',
      'html_type' => 'Text',
      'is_required' => 0,
      'is_searchable' => 1,
    ),
    ),
  );