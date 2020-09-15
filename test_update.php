<?php
/**
 * Plugin Name: Testing Updates
 * Plugin URI:  https://erinedawson.com
 * Description: just testing something out
 * Version:     1.1.0
 * Author:      Erin Dawson
 * Author URI:  https://github.com/edawson1980
 * Text Domain:
 * Domain Path: /languages
 * License:     GPL3+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */


 namespace test_update;



 //  Exit if accessed directly.
 defined( 'ABSPATH' ) || exit;

 /**
  * Gets this plugin's absolute directory path.
  *
  * @since  2.1.0
  * @ignore
  * @access private
  *
  * @return string
  */
 function _get_plugin_directory() {
 	return __DIR__;
 }

 /**
  * Gets this plugin's URL.
  *
  * @since  2.1.0
  * @ignore
  * @access private
  *
  * @return string
  */
 function _get_plugin_url() {
 	static $plugin_url;

 	if ( empty( $plugin_url ) ) {
 		$plugin_url = plugins_url( null, __FILE__ );
 	}

 	return $plugin_url;
 }





 //pull in the stuff
 include __DIR__ . '/functions.php';




 ?>
