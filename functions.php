<?php


// stiliai
// <link rel="stylesheet" href="assets/css/reset.css">
// <link rel="stylesheet" href="assets/fonts/all/stylesheet.css">
// <link rel="stylesheet" href="assets/css/styles.css">

//deffine assets http_build_url
define('ASSETS_URL', get_template_directory_uri().'/assets/' );
//get_template_directory_url()


add_action('wp_enqueue_scripts', 'addThemeScripts');

add_action('init', 'dellBarr');

function dellBarr(){
  show_admin_bar(false);
};



function addThemeScripts()
{
  wp_enqueue_style('jquery');
if (!is_admin()) {
  // code...

  //adding css
wp_enqueue_style('reset', ASSETS_URL.'css/reset.css' );
wp_enqueue_style('aos', ASSETS_URL.'fonts/all/aos.css' );
wp_enqueue_style('mai', ASSETS_URL.'css/main.css' );

//addrig js
// <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
// <script type="text/javascript" src="assets\scripts\slide.js">
// </script>
// <script type="text/javascript" src="assets\scripts\tabs.js">
// </script>


wp_enqueue_script('script_js',  ASSETS_URL.'js/script.js', array('jquery'), false, true);



}

}



add_action ('init', 'add_menu');

function add_menu()
{
add_theme_support ('menus');
}




// //regiruojamas meniu
// add_action ('init', 'registerMenu');
//  function registerMenu()
//  {
//    register_nav_menus(array(
//          'top-menu' => __( 'Top Menu', 'tema' )
//      ));
//  }
//
//
// add_action ('init', 'imageResize');
// function imageResize ()
// {
// add_image_size ('tabs_right_image', 320, 125, array('center', 'center'));
// add_image_size ('other_images', 453, 303, array('center', 'center'));
// add_image_size ('customer_foto', 70, 70, array('center', 'center'));
//
// }
