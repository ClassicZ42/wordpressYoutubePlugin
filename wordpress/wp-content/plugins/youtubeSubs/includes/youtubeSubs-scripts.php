<?php
// add scripts
// all functions should have a prefix which should be your domain
// this function will add our scripts
function yts_add_scripts(){
  // add the css file
  // wp_enqueue_style('name','path'); is a function of the wp api
  // use the plugins_url(); function to return plugin directory path
  wp_enqueue_style('yts-main-style',plugins_url().'/youtubeSubs/css/styles.css');
  // add the js file
  //wp_enqueue_script();
  //
  wp_enqueue_script('yts-main-js',plugins_url().'/youtubeSubs/js/main.css');

  // add google script
  wp_register_script('google','https://apis.google.com/js/platform.js');

  // and ! enqueue the script if its a cdn
  wp_enqueue_script('google');
}

// hook the function into wordpress so you can use it

//add_action('hook','the_function_name');
add_action('wp_enqueue_scripts', 'yts_add_scripts');
