<?php $stage = get_field('stage') ?>
<section class="stage">
  <p class="stage__supline">
    <?= $stage['supline'] ?>
  </p>
  <h1 class="stage__headline">
    <?= $stage['headline'] ?>
  </h1>
  <p class="stage__subline">
    <?= $stage['subline'] ?>
  </p>
  <div class="stage__description">
    <?= $stage['text'] ?>
  </div>
  <a class="stage__link" href="<?= $stage['link']['url'] ?>">
    <?= $stage['link']['title'] ?>
  </a>

  <img class="stage__image"
       src="<?= $stage['background_image']['url'] ?>"
       alt="<?= $stage['background_image']['alt'] ?>"
       width="<?= $stage['background_image']['width'] ?>"
       height="<?= $stage['background_image']['height'] ?>"/>
</section>
