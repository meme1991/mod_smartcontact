<?php
/**
 * Alternate layout: text always at top
 */
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$moduleclass = isset($moduleclass_sfx) ? $moduleclass_sfx : '';
$title = trim($title);
?>
<div class="mod-smartcontact mod-smartcontact-top <?php echo $moduleclass; ?>">
    <?php if ($title) : ?>
        <h3 class="mod-smartcontact-title"><?php echo htmlspecialchars(Text::_($title), ENT_QUOTES, 'UTF-8'); ?></h3>
    <?php endif; ?>

    <?php if ($show_text) : ?>
        <div class="mod-smartcontact-text">
            <?php echo $text; ?>
        </div>
    <?php endif; ?>

    <!-- reuse same list structure as default -->
    <?php include ModuleHelper::getLayoutPath('mod_smartcontact', 'default'); ?>
</div>

