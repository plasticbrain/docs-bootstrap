<?php

//------------------------------------------------------------------------------
// Project Settings (Name and URL)
//------------------------------------------------------------------------------
define('NAME', 'Documentation Bootsrap');
define('PROJECT_LINK', '');

//------------------------------------------------------------------------------
// Company Name and URL
//------------------------------------------------------------------------------
define('COMPANY', ' PlasticBrain Media LLC');
define('COMPANY_LINK', 'http://plasticbrain.net');

//------------------------------------------------------------------------------
// Show the "Fork me on Github" ribbon?
//------------------------------------------------------------------------------
define('GIT_URL', '#'); // URL to the Github repository for this project
define('SHOW_GIT_RIBBON', true); // Show the "Fork me on Github" ribbon?

// Which ribbon do you want to use? Options are:
// blue-white, green-white, pink-black, red-white, white-black, green-black, orange-black, violet-white
define('GIT_RIBBON', 'red-white'); 

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