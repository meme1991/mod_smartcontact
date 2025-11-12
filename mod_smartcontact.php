<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;

/* params */
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_QUOTES, 'UTF-8');

$title        = $params->get('title', '');
$show_text    = (bool) $params->get('text-yn', 0);
$text         = $params->get('text', '');
$text_pos     = (int) $params->get('text-position', 1);
$show_address = (bool) $params->get('address-yn', 0);
$address      = $params->get('address', '');
$show_tel     = (bool) $params->get('tel-yn', 0);
$tel1         = $params->get('tel-1', '');
$tel2         = $params->get('tel-2', '');
$show_fax     = (bool) $params->get('fax-yn', 0);
$fax          = $params->get('fax', '');
$show_email   = (bool) $params->get('email-yn', 0);
$email1       = $params->get('email-1', '');
$email2       = $params->get('email-2', '');
$pec          = $params->get('pec', '');

$show_office  = (bool) $params->get('office-yn', 0);
$office_link  = null;
$menu         = null;

if ($show_office) {
    $office_menu_id = (int) $params->get('office', 0);
    try {
        $app = Factory::getApplication();
        if (is_object($app) && method_exists($app, 'getMenu')) {
            $menu = $app->getMenu()->getItem($office_menu_id);
            if ($menu) {
                // In Joomla menu item link may be stored in ->link or ->route; keep raw link and let template handle.
                $office_link = isset($menu->link) ? $menu->link : (isset($menu->route) ? $menu->route : null);
            }
        }
    } catch (Throwable $e) {
        // Non blocchiamo l'esecuzione se getMenu non è disponibile
        $menu = null;
        $office_link = null;
    }
}

/* render layout */
require ModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
