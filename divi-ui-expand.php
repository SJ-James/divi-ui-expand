<?php
/*
Plugin Name: Divi UI Expand
Version: 0.1.0
Author: Stephen James
Text Domain: divi-ui-ex
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit; // No direct access

define('DIVI_UI_EX', plugin_dir_url( __FILE__ ) );

function divi_ui_ex_scripts() {
  wp_enqueue_style( 'divi_ui_ex_css', DIVI_UI_EX . 'css/divi_ui_ex.css' );
}
add_action( 'admin_enqueue_scripts', 'divi_ui_ex_scripts', 99 );
