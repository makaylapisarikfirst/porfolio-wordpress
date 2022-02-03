<!--Header Template-->
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
      <!-- <div>
      <ul>
        <li><a href="./portfolio.html">Portfolio</a></li>
        <li><a href="./about.html">About</a></li>
        <li><a href="contacts.html">Contacts</a></li>
      </ul>
    </div> -->
    <?php
      $args=array(
        'theme_location' => 'primary'
      );
      wp_nav_menu($args);
     ?>
    </nav>
  </section>
 <main>
   <h1 class="home_title">Welcome!<h1>
      </br>
      <img class="home_img" src="<?php echo get_template_directory_uri(); ?>/assets/head_shot.jpg" alt="Image of Makayla" />
      <h3 class="home_title">Im a Graphics Designer!</h3>
      <p class="discription" >I am Makayla and I'm striving to have a sucessful career as a graphic designer. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris... </p>
        <p class="discription"> <a href="about.html">Read More</a> </p>
      <h2 class="home_title">Take A Look At Some Of My Work:</h2>
      <section class="home-container">
        <div class="home_grid">
        <a href="organic-honey-website.html" ><img class="home_img_work_left" src="<?php echo get_template_directory_uri(); ?>/assets/Organic_Honey_Logo_revised2.png" alt="Organic Honey Logo" /></a>
        <a href="bomb_pop_ad.html" ><img class="home_img_work_right" src="<?php echo get_template_directory_uri(); ?>/assets/BOMB_POP.jpg" alt="Bomb Pop Ad" /></a>
         <a href="organic-honey-app.html" ><img class="home_img_work_left" src="<?php echo get_template_directory_uri(); ?>/assets/organic-app-menu.jpg" alt="Organic Honey App menu" /></a>
         <a href="excude-fashion.html" ><img class="home_img_work_right" src="<?php echo get_template_directory_uri(); ?>/assets/Fall_Catalog_Project_cover.png" alt="EXCUDE fashion cover" /></a>
      </div>
      </section>
      <section class="contact_me_home">
      <h1 class="contact_me">Contact Me Today:<h1>
      </br>
        <h2><a href="./contacts.html" class="contact_action">Contact</h2></a>
      </section>

 </main>


<!--Footer Template file-->
<?php get_footer(); ?>
