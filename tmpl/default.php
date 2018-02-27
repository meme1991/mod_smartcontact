<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

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
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_EMAIL') ?> <a href="mailto:<?php echo $email1 ?>"><?php echo $email1 ?></a></p>
      <?php endif; ?>
      <?php if($email2 != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_EMAIL') ?> <a href="mailto:<?php echo $email2 ?>"><?php echo $email2 ?></a></p>
      <?php endif; ?>
      <?php if($pec != '') : ?>
      <p class="mb-1"><?php echo JText::_('MOD_SMARTCONTACT_PEC') ?> <a href="mailto:<?php echo $pec ?>"><?php echo $pec ?></a></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if($show_office) : ?>
      <p class="mb-1">
        <a href="<?php echo $menu->link ?>" title="<?php echo $menu->title ?>"><?php echo $menu->title ?><i class="far fa-external-link ml-2"></i></a>
      </p>
    <?php endif; ?>

    <?php if($show_text AND $text != '' AND !$text_pos) : ?>
      <p class="mb-1"><?php echo $text ?></p>
    <?php endif; ?>
  </div>
