<?php get_header(); ?>
<header>
  <div class="header_left">
  <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.jpg" alt="Makayla Joye's Creations Logo" />
</div>
<div class="header_center">
<h1>Makayla Joye Designs<h1>
</div>
</header>
<section>
<nav class="navbar">
  <?php
    $args=array(
      'theme_location' => 'primary'
    );
    wp_nav_menu($args);
 ?>
</nav>
<main>
  <img class="about_img" src="<?php echo get_template_directory_uri(); ?>/assets/head_shot.jpg" alt="Photo of Makayla" />
   <h2 class="title">Who am I?</h2>
   <p class="about_discription" >I, Makayla Pisarik, am currently studying at F.I.R.S.T Institution to become a Graphic Designer. My goal is to find myself working at a Design Firm. I love all graphic design; however, I find particularly branding and advertising for business interesting and strive to further my skills in marketing and graphic design.  Because of my hands-on help with State Street Beard Co., I have found a passion for helping them design advertisements and photographing her products. I am eager to take this experience and knowledge from school and further my exposure. I am currently looking for an internship to further my experience in the design field. I want to learn from other professional designers how to better satisfy customers with my designs.</p>
 </br>
</main>
<?php get_footer(); ?>
