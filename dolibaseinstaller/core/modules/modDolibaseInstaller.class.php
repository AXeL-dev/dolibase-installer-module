<?php

// Load Dolibase
dol_include_once('dolibaseinstaller/autoload.php');

// Load Dolibase Module class
dol_include_once('dolibaseinstaller/class/module.php');

// Load Dolibarr files lib
require_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';

/**
 *	Class to describe and enable module
 */
class modDolibaseInstaller extends DolibaseModuleTwoNineFour
{
	/**
	 * Function called when module is enabled.
	 * The init function add constants, boxes, permissions and menus
	 * (defined in constructor) into Dolibarr database.
	 * It also creates data directories
	 *
	 * @param string $options Options when enabling module ('', 'noboxes')
	 * @return int 1 if OK, 0 if KO
	 */
	public function init($options = '')
	{
		global $conf;

		if (! $conf->global->DOLIBASE_INSTALL_LOCK)
		{
			$srcdir = dol_buildpath('dolibaseinstaller/dolibase');
			$destdir = DOL_DOCUMENT_ROOT.'/dolibase';

			if (is_dir($destdir)) {
				dol_delete_dir_recursive($destdir);
			}

			dolCopyDir($srcdir, $destdir, $conf->global->MAIN_UMASK, 1);
		}

		return parent::init($options);
	}

	/**
	 * Function called when module is disabled.
	 * Remove from database constants, boxes and permissions from Dolibarr database.
	 * Data directories are not deleted
	 *
	 * @param string $options Options when enabling module ('', 'noboxes')
	 * @return int 1 if OK, 0 if KO
	 */
	public function remove($options = '')
	{
		global $conf;

		if (! $conf->global->DOLIBASE_INSTALL_LOCK)
		{
			$dolibasedir = DOL_DOCUMENT_ROOT.'/dolibase';

			if (is_dir($dolibasedir)) {
				dol_delete_dir_recursive($dolibasedir);
			}
		}

		return parent::remove($options);
	}
}
