{* header *}
<h3>{$ruleactionheader}</h3>
<div class="crm-block crm-form-block crm-civirule-rule_action-block-contact_subtype">
  <div class="crm-section">
    <div class="label">{$form.type.label}</div>
    <div class="content">{$form.type.html}</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label">{$form.only_if_not_exist.label}</div>
    <div class="content">{$form.only_if_not_exist.html}</div>
    <div class="clear"></div>
  </div>
</div>

<div class="crm-submit-buttons">
  {include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
