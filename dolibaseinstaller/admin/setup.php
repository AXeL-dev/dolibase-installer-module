<?php

// Load Dolibase
include_once '../autoload.php';

// Load Dolibase SetupPage class
dolibase_include_once('/core/pages/setup.php');

// Create Setup Page using Dolibase
$page = new SetupPage('Setup', '$user->admin', false, false);

// Get parameters
$action = GETPOST('action', 'alpha');

// Set actions ---

// Enable builder

if ($action == 'enable_builder')
{
	$builder_htaccess = DOL_DOCUMENT_ROOT.'/dolibase/builder/.htaccess';

	if (file_exists($builder_htaccess)) {
		unlink($builder_htaccess);
	}

	dolibase_redirect($_SERVER['PHP_SELF']);
}

// Disable builder

else if ($action == 'disable_builder')
{
	$builder_htaccess = DOL_DOCUMENT_ROOT.'/dolibase/builder/.htaccess';

	if (! file_exists($builder_htaccess)) {
		file_put_contents($builder_htaccess, 'Deny from all');
	}

	dolibase_redirect($_SERVER['PHP_SELF']);
}

// --- End actions

$page->begin();

$page->addSubTitle('Settings');

$page->showTemplate('setup.php');

$page->end();
