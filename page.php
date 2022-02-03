
<?php get_header();?>
<nav class="navbar">
<?php
  $args=array(
    'theme_location' => 'primary'
  );
  wp_nav_menu($args);
 ?>
</nav>

<!--Footer template file-->
<?php get_footer(); ?>
