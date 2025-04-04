<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $link = get_sub_field('link') ?>
<?php $image = get_sub_field('background_image') ?>
<?php $media_position = get_sub_field('media_position') ?>
<?php $media_type = get_sub_field('media_type') ?>

<section class="text-media text-media__position--<?= $media_position ?>">
  <div class="text-media__content-container">
    <?php if ($headline !== ""): ?>
      <h2 class="text-media__content-title">
        <?= $headline ?>
      </h2>
    <?php endif; ?>
    <div class="text-media__content-text">
      <?= $text ?>
    </div>
    <a class="text-media__content-link"
       href="<?= $link['url'] ?>"
       target="<?= $link['target'] === "_blank" ?: "_self" ?>">
      <?= $link['title'] ?>
    </a>
  </div>
  <?php if ($media_type === 'image'): ?>
    <img class="text-media__image" src="<?= $image['url'] ?>"
         alt="<?= $image['alt'] ?>"
         width="<?= $image['width'] ?>"
         height="<?= $image['height'] ?>">
  <?php elseif ($media_type === 'video'): ?>
    <video class="text-media__video">

    </video>
  <?php elseif ($media_type === 'slider'): ?>
    <div>

    </div>
  <?php endif; ?>
</section>

