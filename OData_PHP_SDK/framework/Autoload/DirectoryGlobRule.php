<?php
namespace Inpsyde\Autoload;


class DirectoryGlobRule implements AutoloadRule {

	/**
	 * @type string
	 */
	private $pattern;

	/**
	 * @type array
	 */
	private $files;

	/**
	 * @param string $pattern
	 */
	public function __construct( $pattern ) {

		$this->pattern = (string) $pattern;
	}

	/**
	 * Parse name and load file.
	 *
	 * @param string $name File nam
	 * @return bool
	 */
	public function load( $name ) {
		if ( empty( $this->files ) )
			$this->files = $this->read_files();

		$file = $name . '.php';
		if ( isset( $this->files[ $file ] ) ) {
			require_once $this->files[ $file ];
			return TRUE;
		}

		return FALSE;
	}

	/**
	 * return a list of all php files in the directory
	 *
	 * @return array
	 */
	public function read_files() {

		$files = glob( $this->pattern );
		$basenames = array();
		foreach ( $files as $file )
			$basenames[ basename( $file ) ] = $file;

		return $basenames;
	}
}