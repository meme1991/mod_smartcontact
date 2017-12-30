<?php
/**
 * @version    2.0.x
 * @package    Smart Contact
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/* params */
$title        = $params->get('title');
$show_text    = $params->get('text-yn');
$text         = $params->get('text');
$text_pos     = $params->get('text-position');
$show_address = $params->get('address-yn');
$address      = $params->get('address');
$show_tel     = $params->get('tel-yn');
$tel1         = $params->get('tel-1');
$tel2         = $params->get('tel-2');
$show_fax     = $params->get('fax-yn');
$fax          = $params->get('fax');
$show_email   = $params->get('email-yn');
$email1       = $params->get('email-1');
$email2       = $params->get('email-2');
$pec          = $params->get('pec');

$show_office  = $params->get('office-yn');
if($show_office){
  $office_menu_id = $params->get('office');
  $app            = JFactory::getApplication();
  $menu           = $app->getMenu()->getItem($office_menu_id);
}

/* style */
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
