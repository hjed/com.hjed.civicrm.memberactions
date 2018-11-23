<?php

use CRM_Memberactions_ExtensionUtil as E;
/**
 * CiviCRM Action for changing the status of a membership.
 */

class CRM_Memberactions_MembershipStatusChange extends CRM_Civirules_Action {

  /**
   * Method to return the url for additional form processing for action
   * and return false if none is needed
   *
   * @param int $ruleActionId
   * @return bool
   * @access public
   */
  public function getExtraDataInputUrl($ruleActionId) {
    return CRM_Utils_System::url('civicrm/memberactions/form/action/membership/change', 'rule_action_id='.$ruleActionId);
  }

  /**
   * Method processAction to execute the action
   *
   * @param CRM_Civirules_TriggerData_TriggerData $triggerData
   * @access public
   *
   */
  public function processAction(CRM_Civirules_TriggerData_TriggerData $triggerData) {
    $contactId = $triggerData->getContactId();

    $action_params = $this->getActionParameters();

    $checkParams = array(
      'contact_id' => $contactId,
      'membership_type_id' => $action_params['type']
    );
    $result = civicrm_api3('membership', 'get', $checkParams);
    
    // no matching membership do nothing
    if($result["count"] == 0) {
      return;
    }

    $createParams = array(
      'id' => reset($result['values'])['id'],
      'membership_type_id' => $action_params['type'],
      'contact_id' => $contactId,
      'status_id' => $action_params['status'],
      'is_override' => TRUE
    );

    if($action_params['addEndDate']) {
      $createParams['end_date'] = date("Y-m-d");
    }

    // create is also used to update
    civicrm_api3('membership', 'create', $createParams);
  }


}