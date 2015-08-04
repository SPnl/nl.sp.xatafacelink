<?php

require_once 'xatafacelink.civix.php';

/**
* Place a link to the partner detail screen in Odoo on the contact card
*
 * Implementation of hook_civicrm_summary
*
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_summary
 */
function xatafacelink_civicrm_pageRun(&$page) {
	if ($page instanceof CRM_Contact_Page_View_Summary) {
			CRM_Core_Region::instance('page-body')->add(array(
				'template' => "CRM/Contact/Page/View/Summary/link_to_xataface.tpl"
			));
			$smarty = CRM_Core_Smarty::singleton();
			$smarty->assign('link_to_xataface', '/xataface/legacy/index.php?-table=adr001&-action=view&REGNR=' . $page->getVar('_contactId'));
		}
}

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function xatafacelink_civicrm_config(&$config) {
  _xatafacelink_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function xatafacelink_civicrm_xmlMenu(&$files) {
  _xatafacelink_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function xatafacelink_civicrm_install() {
  _xatafacelink_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function xatafacelink_civicrm_uninstall() {
  _xatafacelink_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function xatafacelink_civicrm_enable() {
  _xatafacelink_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function xatafacelink_civicrm_disable() {
  _xatafacelink_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function xatafacelink_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _xatafacelink_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function xatafacelink_civicrm_managed(&$entities) {
  _xatafacelink_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function xatafacelink_civicrm_caseTypes(&$caseTypes) {
  _xatafacelink_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function xatafacelink_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _xatafacelink_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
