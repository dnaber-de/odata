<?php
/**
 * setup the autoloader
 */
namespace ODataSDK;

function autoload( $dir ) {

	require_once $dir . '/Autoload/bootstrap.php';

	$autoloader = new \Inpsyde\Autoload\Autoload;
	$autoloader->add_rule(
		new \Inpsyde\Autoload\DirectoryGlobRule( $dir . '/*/*.php' )
	);
}
