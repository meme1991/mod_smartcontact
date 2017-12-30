<?php
/**
 * @version    2.0.x
 * @package    Smart Contact
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;
?>
  <div class="smartcontact mt-3">
    <?php if($show_text AND $text != '' AND $text_pos) : ?>
      <p class="mb-1"><?php echo $text ?></p>
    <?php endif; ?>

    <?php if($show_address AND $address != '') : ?>
      <address class="mb-1">
        <?php echo $address ?>
      </address>
    <?php endif; ?>

    <?php if($show_tel) : ?>
      <?php if($tel1 != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_TEL').' '.$tel1 ?></p>
      <?php endif; ?>
      <?php if($tel2 != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_TEL').' '.$tel2 ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if($show_fax AND $fax != '') : ?>
      <?php if($fax != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_FAX').' '.$fax ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if($show_email) : ?>
      <?php if($email1 != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_EMAIL') ?> <a href="mailto::<?php echo $email1 ?>" class="link-featured" title=""><?php echo $email1 ?></a></p>
      <?php endif; ?>
      <?php if($email2 != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_EMAIL') ?> <a href="mailto::<?php echo $email2 ?>" class="link-featured" title=""><?php echo $email2 ?></a></p>
      <?php endif; ?>
      <?php if($pec != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_PEC') ?> <a href="mailto::<?php echo $pec ?>" class="link-featured" title=""><?php echo $pec ?></a></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if($show_office) : ?>
      <p class="mb-1">
        <a href="<?php echo $menu->link ?>" class="link-featured" title="<?php echo $menu->title ?>"><?php echo $menu->title ?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
      </p>
    <?php endif; ?>

    <?php if($show_text AND $text != '' AND !$text_pos) : ?>
      <p class="mb-1"><?php echo $text ?></p>
    <?php endif; ?>
  </div>
