<?php

use CRM_Memberactions_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://wiki.civicrm.org/confluence/display/CRMDOC/QuickForm+Reference
 */
class CRM_Memberactions_Form_CreateMembershipAction extends CRM_CivirulesActions_Form_Form {

  /**
   * Method to get the list of available membership types
   * @return array
   */
  private function getMembershipTypes() {
    $memberTypes = CRM_Member_BAO_MembershipType::getMembershipTypes();
    $options = array();
    foreach($memberTypes as $id => $name) {
      $options[$id] = $name;
    }
    return $options;
  }

  public function buildQuickForm() {

    $this->add('hidden', 'rule_action_id');

    $this->add(
      'select',
      'type',
      ts('Membership Type'),
      array('' => ts('-- please select --')) + $this->getMembershipTypes());


//    parent::buildQuickForm();

    $this->addButtons(array(
      array('type' => 'next', 'name' => ts('Save'), 'isDefault' => TRUE,),
      array('type' => 'cancel', 'name' => ts('Cancel'))));
  }

  /**
   * Overridden parent method to process form data after submitting
   *
   * @access public
   */
  public function postProcess() {
    $data['type'] = $this->_submitValues['type'];

    $this->ruleAction->action_params = serialize($data);
    $this->ruleAction->save();
    parent::postProcess();
  }
}
