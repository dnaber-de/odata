<?php # -*- coding: utf-8 -*-

namespace Inpsyde\Autoload;

/**
 * Interface AutoloadRule
 *
 * @package Inpsyde\Autoload
 * @version 2014-05-22
 */
interface AutoloadRule {

	/**
	 * Parse name and load file.
	 *
	 * @param string $name File name
	 *
	 * @return bool
	 */
	public function load( $name );

}
