<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 10-12-2019
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;
?>
<div class="smartcontact-top">
  <div class="inline-menu ">
  	<ul class="list-inline">
      <?php if($show_address AND $address != '') : ?>
        <li class="list-inline-item">
          <i class="fal fa-map-marker-alt pr-2"></i>
          <?php echo $address ?>
        </li>
      <?php endif; ?>

      <?php if($tel1 != '') : ?>
        <li class="list-inline-item">
          <i class="fal fa-phone pr-2"></i>
          <a href="tel:<?php echo $tel1 ?>"><?php echo $tel1 ?></a>
        </li>
      <?php endif; ?>

      <?php if($email1 != '') : ?>
        <li class="list-inline-item">
          <i class="fal fa-paper-plane pr-2"></i>
          <a href="mailto:<?php echo $email1 ?>"><?php echo $email1 ?></a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</div>
