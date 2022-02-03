<?php get_header(); ?>

    <header>
      <div class="header_left">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.jpg" alt="Makayla Joye's Creations Logo" />
    </div>
    <div class="header_center">
    <h1>Makayla Joye Designs<h1>
    </div>
    </header>
    <nav class='navbar' >
      <?php
        $args=array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args);
       ?>
    </nav>
    <main>
      <section class="contact_me">

        <?php
            while(have_posts()){
              the_post();
              the_content();
            }
         ?>

      </section>
    </main>
    <?php get_footer(); ?>
