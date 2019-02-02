<?php

global $dolibase_config;

/**
 * Module configuration
 */

$dolibase_config['module'] = array(
	'name'            => 'DolibaseInstaller',
	'desc'            => 'DolibaseInstallerDescription',
	'version'         => 'dolibase',
	'number'          => '453000',
	'family'          => 'base',
	'position'        => 500,
	'rights_class'    => 'dolibaseinstaller',
	'url'             => 'https://www.dolistore.com/en/modules/1060-Dolibase-Installer.html',
	'folder'          => 'dolibaseinstaller',
	'picture'         => 'dolibaseinstaller.png',
	'dirs'            => array(),
	'dolibarr_min'    => array(3, 8),
	'php_min'         => array(5, 3),
	'depends'         => array(),
	'required_by'     => array(),
	'conflit_with'    => array(),
	'check_updates'   => true,
	'enable_logs'     => false,
	'enable_triggers' => false
);

/**
 * Author informations
 */

$dolibase_config['author'] = array(
	'name'          => 'AXeL',
	'url'           => 'https://github.com/AXeL-dev',
	'email'         => 'contact.axel.dev@gmail.com',
	'dolistore_url' => 'https://www.dolistore.com/en/search?orderby=position&orderway=desc&search_query=axel'
);

/**
 * Numbering model (optional)
 */

$dolibase_config['numbering_model'] = array(
	'table'  => '',
	'field'  => '',
	'prefix' => ''
);

/**
 * Other (default)
 */

$dolibase_config['other'] = array(
	'setup_page'     => 'setup.php',
	'about_page'     => 'about.php',
	'lang_files'     => array($dolibase_config['module']['folder'].'@'.$dolibase_config['module']['folder']),
	'menu_lang_file' => $dolibase_config['module']['folder'].'@'.$dolibase_config['module']['folder'],
	'top_menu_name'  => str_replace('_', '', $dolibase_config['module']['folder'])
);
