<?php

use CRM_Memberactions_ExtensionUtil as E;
/**
 * CiviCRM Action for creating a membership. 
 */

class CRM_Memberactions_MembershipCreate extends CRM_Civirules_Action {

  /**
   * Method to return the url for additional form processing for action
   * and return false if none is needed
   *
   * @param int $ruleActionId
   * @return bool
   * @access public
   */
  public function getExtraDataInputUrl($ruleActionId) {
    return CRM_Utils_System::url('civicrm/memberactions/form/action/membership/create', 'rule_action_id='.$ruleActionId);
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


    $subTypes = CRM_Contact_BAO_Contact::getContactSubType($contactId);
    $contactType = CRM_Contact_BAO_Contact::getContactType($contactId);

    $changed = false;
    $action_params = $this->getActionParameters();

    $createParams = array(
      'contact_id' => $contactId,
      'membership_type_id' => $action_params['type']
    );

    civicrm_api3("membership", "create", $createParams);
  }


}