<?php
add_action( 'admin_bar_menu', 'dummy_alert', 999 );
function dummy_alert( $wp_admin_bar ) {
  $args = array(
  'id'    => 'dummy-alert',
  'title' => 'Step aside, CHUMLEY'
  );

  $wp_admin_bar->add_node( $args );
}


//add updater
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/user-name/repo-name/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);
