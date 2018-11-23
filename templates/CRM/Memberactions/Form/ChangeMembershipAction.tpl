{* header *}
<h3>{$ruleactionheader}</h3>
<div class="crm-block crm-form-block crm-civirule-rule_action-block-contact_subtype">
  <div class="crm-section">
    <div class="label">{$form.type.label}</div>
    <div class="content">{$form.type.html}</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label">{$form.status.label}</div>
    <div class="content">{$form.status.html}</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label">{$form.addEndDate.label}</div>
    <div class="content">{$form.addEndDate.html}</div>
    <div class="clear"></div>
  </div>
</div>

<div class="crm-submit-buttons">
  {include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
