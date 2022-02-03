    <?php
    //Theme Functions Go Here

    function enqueue_my_styles_and_scripts(){

      //custom stylesheet
      wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/master.css', array(), null, 'all');


    }

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');


function mytheme_setup() {

  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

}

add_action('after_setup_theme','mytheme_setup');
?>
