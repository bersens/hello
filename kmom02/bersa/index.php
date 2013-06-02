<?php
//
// PHASE: BOOTSTRAP
//
define('BERSA_INSTALL_PATH', dirname(__FILE__));
define('BERSA_SITE_PATH', BERSA_INSTALL_PATH . '/site');

require(BERSA_INSTALL_PATH.'/src/CBersa/bootstrap.php');

$be = CBersa::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$be->FrontControllerRoute();



//
// PHASE: THEME ENGINE RENDER
//
$be->ThemeEngineRender();