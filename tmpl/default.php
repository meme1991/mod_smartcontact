<?php
/**
 * @package    mod_smartcontact
 * @copyright  SPEDI srl
 * @license    GNU/GPL
 */
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$moduleclass = isset($moduleclass_sfx) ? $moduleclass_sfx : '';
$title = trim($title);
?>
<div class="mod-smartcontact <?php echo $moduleclass; ?>">
    <?php if ($title) : ?>
        <h3 class="mod-smartcontact-title"><?php echo htmlspecialchars(Text::_($title), ENT_QUOTES, 'UTF-8'); ?></h3>
    <?php endif; ?>

    <?php if ($show_text && $text_pos === 1) : ?>
        <div class="mod-smartcontact-text">
            <?php echo $text; ?>
        </div>
    <?php endif; ?>

    <ul class="mod-smartcontact-list">
        <?php if ($show_address && strlen(trim($address))) : ?>
            <li class="mod-smartcontact-address">
                <strong><?php echo Text::_('MOD_SMARTCONTACT_ADDRESS_LABEL'); ?>:</strong>
                <div><?php echo nl2br(htmlspecialchars($address, ENT_QUOTES, 'UTF-8')); ?></div>
            </li>
        <?php endif; ?>

        <?php if ($show_tel && (strlen(trim($tel1)) || strlen(trim($tel2)))) : ?>
            <li class="mod-smartcontact-phones">
                <strong><?php echo Text::_('MOD_SMARTCONTACT_TEL_LABEL'); ?>:</strong>
                <div>
                    <?php if (strlen(trim($tel1))) : ?>
                        <div class="phone-primary"><?php echo htmlspecialchars($tel1, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                    <?php if (strlen(trim($tel2))) : ?>
                        <div class="phone-secondary"><?php echo htmlspecialchars($tel2, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                </div>
            </li>
        <?php endif; ?>

        <?php if ($show_fax && strlen(trim($fax))) : ?>
            <li class="mod-smartcontact-fax">
                <strong><?php echo Text::_('MOD_SMARTCONTACT_FAX_LABEL'); ?>:</strong>
                <div><?php echo htmlspecialchars($fax, ENT_QUOTES, 'UTF-8'); ?></div>
            </li>
        <?php endif; ?>

        <?php if ($show_email && (strlen(trim($email1)) || strlen(trim($email2)) || strlen(trim($pec)))) : ?>
            <li class="mod-smartcontact-emails">
                <strong><?php echo Text::_('MOD_SMARTCONTACT_EMAIL_LABEL'); ?>:</strong>
                <div>
                    <?php if (strlen(trim($email1))) : ?>
                        <div><a href="mailto:<?php echo htmlspecialchars($email1, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($email1, ENT_QUOTES, 'UTF-8'); ?></a></div>
                    <?php endif; ?>
                    <?php if (strlen(trim($email2))) : ?>
                        <div><a href="mailto:<?php echo htmlspecialchars($email2, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($email2, ENT_QUOTES, 'UTF-8'); ?></a></div>
                    <?php endif; ?>
                    <?php if (strlen(trim($pec))) : ?>
                        <div class="pec"><a href="mailto:<?php echo htmlspecialchars($pec, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($pec, ENT_QUOTES, 'UTF-8'); ?> (PEC)</a></div>
                    <?php endif; ?>
                </div>
            </li>
        <?php endif; ?>

        <?php if ($show_office && !empty($menu)) : ?>
            <li class="mod-smartcontact-office">
                <strong><?php echo Text::_('MOD_SMARTCONTACT_OFFICE'); ?>:</strong>
                <?php if (!empty($office_link)) : ?>
                    <div><a href="<?php echo htmlspecialchars($office_link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($menu->title, ENT_QUOTES, 'UTF-8'); ?></a></div>
                <?php else : ?>
                    <div><?php echo htmlspecialchars($menu->title, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    </ul>

    <?php if ($show_text && $text_pos === 0) : ?>
        <div class="mod-smartcontact-text">
            <?php echo $text; ?>
        </div>
    <?php endif; ?>
</div>
