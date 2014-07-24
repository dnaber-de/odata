<?php # -*- coding: utf-8 -*-

namespace Inpsyde\Autoload;

/**
 * Require autoload classes.
 *
 * @package Inpsyde\Autoload
 * @version 2014-05-23
 */
foreach ( array( 'Autoload', 'AutoloadRule', 'NamespaceRule', 'DirectoryGlobRule' ) as $name ) {
	$fqn = __NAMESPACE__ . '\\' . $name;
	if ( ! class_exists( $fqn ) && ! interface_exists( $fqn ) ) {
		require_once __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';
	}
}
