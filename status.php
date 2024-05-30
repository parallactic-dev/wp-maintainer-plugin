<?php
/*
Plugin Name: Parallactic WP Maintainer
Description: Exposes WordPress update status via REST API.
Version: 1.4.1
Author: Parallactic
Author URI: https://parallactic.dev
Requires at least: 5.0
Requires PHP: 7.2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'includes/wp-maintainer.php';

function run_parallactic() {
	new WP_Maintianer_Plugin();

}
run_parallactic();
