<?php /* Template Name: Page "Contact" */ ?>

<?php get_header(); ?>
    <aside>
        <h2>Contactez-moi</h2>
    </aside>
    <?php 
    // On ouvre "la boucle" (The Loop), la structure de contrôle
    // de contenu propre à Wordpress:
    if(have_posts()): while(have_posts()): the_post(); ?>

    <section class="contact">
        <div class="contact__left"><?= get_the_content(); ?></div>
        <div class="contact__right">
            <form action="<?= admin_url('admin-post.php'); ?>" method="POST" class="form">
                <fieldset class="form__fields">
                    <div class="field">
                        <label for="firstname" class="field__label">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="field__input">
                    </div>
                    <div class="field">
                        <label for="lastname" class="field__label">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="field__input">
                    </div>
                    <div class="field">
                        <label for="email" class="field__label">Adresse mail</label>
                        <input type="email" name="email" id="email" class="field__input">
                    </div>
                    <div class="field">
                        <label for="message" class="field__label">Message</label>
                        <textarea name="message" id="message" class="field__input"></textarea>
                    </div>
                </fieldset>
                <div class="form__submit">
                    <?php 
                    // ce champ "hidden" permet à WP d'identifier la requête et de la transmettre
                    // à notre fonction définie dans functions.php via "add_action('admin_post_[nom-action]')"
                    ?>
                    <input type="hidden" name="action" value="dw_submit_contact_form">
                    <button type="submit" class="btn">Envoyer</button>
                </div>
            </form>
        </div>
    </section>

    <?php
    // On ferme "la boucle" (The Loop):
    endwhile; else: ?>
    <p>La page est vide.</p>
    <?php endif; ?>
<?php get_footer(); ?>








