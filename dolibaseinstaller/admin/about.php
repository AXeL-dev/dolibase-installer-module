<?php

// Load Dolibase
include_once '../autoload.php';

// Load Dolibase AboutPage class
dolibase_include_once('/core/pages/about.php');

// Create About Page using Dolibase
$page = new AboutPage('About', '$user->admin', false);

$page->begin();

$page->printModuleInformations('dolibaseinstaller.png');

$page->end();
