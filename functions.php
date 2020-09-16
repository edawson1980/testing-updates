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
$testUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/edawson1980/testing-updates',
    __FILE__, //Full path to the main plugin file or functions.php.
    'test-plugin-updates'
);

$testUpdateChecker->setBranch('master');
