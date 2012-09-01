<?php
define( 'WP_TESTS_PATH', '/Users/nb/wordpress/unit/trunk' );

$GLOBALS['wp_tests_options'] = array(
    'active_plugins' => array( 'liveblog/liveblog.php' ),
);

require rtrim( WP_TESTS_PATH, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . 'bootstrap.php';
