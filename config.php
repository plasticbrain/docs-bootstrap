<?php
//------------------------------------------------------------------------------
// The Name of the script
//------------------------------------------------------------------------------
define('NAME', 'Documentation Bootsrap');

//------------------------------------------------------------------------------
// The name of your company, site, etc. (used in copyright text in the footer)
//------------------------------------------------------------------------------
define('COMPANY', ' PlasticBrain Media LLC');

//------------------------------------------------------------------------------
// Set the "Home" location (Manually set this if the script screws it up)
//------------------------------------------------------------------------------
$home  = @$_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
$home .= rtrim($_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'], '/');
$slash = strrpos($home, '/');
if( $slash !== false ) $home = substr($home, 0, $slash);
define('HOME', "$home");

//------------------------------------------------------------------------------
// The base directory
//------------------------------------------------------------------------------	
define('BASE_DIR', dirname(__FILE__));



?>