<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://IamTheOneTheSon.com
Description: Display youtube sub button and count
Version: 1.0.0
Author: Donovan van der Linde
Author URI: https://IamTheOneTheSon.com
*/

// above it the header YOU NEED ALL OF IT
// make sure the plugin cant be acessed directly
  if(!defined('ABSPATH')){
    exit;
  }
// inculde youtubeSubs-scripts here
//plugin_dir_path(__FILE__) gets you to the plugin dir

// require_once(plugin_dir_path(__FILE__));
  require_once(plugin_dir_path(__FILE__).'/includes/youtubeSubs-scripts.php');

// inculde youtubeSubs-class here
  require_once(plugin_dir_path(__FILE__).'/includes/youtubeSubs-class.php');


// register the widget so you can display it

function register_youtubesubs(){
  //register_widget(name_of_class_in_classfile);
  register_widget('Youtube_Subs_Widget');
}

// hook in the register_youtubesubs function
// use widget init
add_action('widgets_init','register_youtubesubs');
