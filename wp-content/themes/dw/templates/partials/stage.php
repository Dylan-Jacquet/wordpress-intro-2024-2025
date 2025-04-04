<?php $stage = get_field('stage') ?>
<p>
  <?= $stage['supline'] ?>
</p>
<h1>
  <?= $stage['headline'] ?>
</h1>
<p>
  <?= $stage['subline'] ?>
</p>
<a href="<?= $stage['link']['url'] ?>">
  <?= $stage['link']['title'] ?>
</a>

<img src="<?= $stage['background_image']['url'] ?>"
     alt="<?= $stage['background_image']['alt'] ?>"
     width="<?= $stage['background_image']['width'] ?>"
     height="<?= $stage['background_image']['height'] ?>"/>
