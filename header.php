<?php
require_once('config.php');

if( !isset($page_title) ) $page_title = '';
if( !isset($page_id) ) $page_id = '';
if( !isset($page_subid) ) $page_subid = '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $page_id == 'home' ? 'Home' : $page_title; ?> :: <?= NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?= HOME; ?>/assets/js/bootstrap/css/bootstrap.prefixed.css" rel="stylesheet">
    <link href="<?= HOME; ?>/assets/js/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />

    <style type="text/css">

        body {
            padding-top: 20px;
            padding-bottom: 40px;
        }

        #content {
            padding: 0 !important;
        }

        #sidebar_holder {
            margin-left: 20px !important;
        }

        #sidebar {
          width: 228px;
          margin: 0;
          padding: 0;
          background-color: #fff;
          -webkit-border-radius: 6px;
             -moz-border-radius: 6px;
                  border-radius: 6px;
          -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
             -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
                  box-shadow: 0 1px 4px rgba(0,0,0,.065);
        }
        #sidebar > li > a {
          display: block;
          width: 190px \9;
          margin: 0 0 -1px;
          padding: 8px 14px;
          border: 1px solid #e5e5e5;
        }
        #sidebar > li:first-child > a {
          -webkit-border-radius: 6px 6px 0 0;
             -moz-border-radius: 6px 6px 0 0;
                  border-radius: 6px 6px 0 0;
        }
        #sidebar > li:last-child > a {
          -webkit-border-radius: 0 0 6px 6px;
             -moz-border-radius: 0 0 6px 6px;
                  border-radius: 0 0 6px 6px;
        }
        #sidebar > .tb-active > a, #sidebar > .tb-active > a:hover {
            background-color: #0088CC;
          position: relative;
          z-index: 2;
          padding: 9px 15px;
          border: 0;
          text-shadow: 0 1px 0 rgba(0,0,0,.15);
          -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
             -moz-box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
                  box-shadow: inset 1px 0 0 rgba(0,0,0,.1), inset -1px 0 0 rgba(0,0,0,.1);
        }

        #sidebar .tb-icon-chevron-right {
            float: right;
            margin-top: 2px;
            margin-right: -6px;
            opacity: .25;
        }
        #sidebar > li > a:hover {
            background-color: #f5f5f5;
        }
        #sidebar a:hover .tb-icon-chevron-right {
            opacity: .5;
        }
        #sidebar .tb-active .tb-icon-chevron-right,
        #sidebar .tb-active a:hover .tb-icon-chevron-right {
            background-image: url(<?= HOME; ?>/assets/js/bootstrap/img/glyphicons-halflings-white.png);
            opacity: 1;
        }

        .tb-page-header small {
            font-size: 16px !important;
            color: #999;
        }

        .section {
            margin: 0 0 50px 0;
        }

        .section h3 {
            margin: 30px 0 20px !important;
        }

        .example {
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 20px 0;
        }

        .example.with-code {
            margin-bottom: 0;
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;

        }

        .example > label {
            background: #f1f1f1;
            padding: 3px 10px;
            margin: 0 0 20px 0;
            display: inline-block;
            clear: both;
            width: auto !important;
            border-top-left-radius: 3px;
            border-bottom-right-radius: 3px;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            font-size: 11px;
            font-weight: bold;
            color: #999;

        }

        .example > .example-content {
            padding: 0 10px 10px;
        }

        .section div.note {
            background: #FFFFE9;
            border: 1px solid #F4F4D4;
            border-top-color: #DADB97;
            border-left-color: #DADB97;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .section div.note p {
            margin: 5px 0 !important;
            padding: 0;
        }

        .example.with-code {
            padding-bottom: 30px;
        }

        pre.bd {
            padding: 0 15px;
            margin: 0;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .tb-page-header.jumbo {
            padding: 10px 20px 20px;
            background: #f9f9f9;
        }

        #site-title, #docs-header .tb-container-fluid {
            margin: 0 auto;
            width: 1000px;
        }

        .tb-page-header.jumbo small {
            font-style: italic ;
        }

        code {
            color: #AA0066;
        }

    </style>
    <link href="<?= HOME; ?>/assets/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?= HOME; ?>/bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= HOME; ?>/assets/js/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= HOME; ?>/assets/js/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= HOME; ?>/assets/js/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= HOME; ?>/assets/js/bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body onload="prettyPrint();">

    <div id="docs-header" class="tb-navbar tb-navbar-fixed-top">
        <div class="tb-navbar-inner">
            <div class="tb-container-fluid">
                <a class="tb-brand" href="<?= HOME; ?>"><?= NAME; ?></a>
                <div class="tb-nav-collapse tb-collapse">
                    <ul class="tb-nav">
                        <?php
                        /* Remove this comment if you absolutely insist on having a "Home" link
                        <li<?= $page_id == 'home' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>">Home</a></li>
                        */ 
                        ?>
                        <li<?= $page_id == 'demo' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>/demo.php">Demo</a></li>
                        <li<?= $page_id == 'installation' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>/installation.php">Installation</a></li>
                        <li<?= $page_id == 'usage' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>/usage.php">Usage</a></li>
                        <li<?= $page_id == 'support' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>/support.php">Support</a></li>
                        <li<?= $page_id == 'credits' ? ' class="tb-active"' : ''; ?>><a href="<?= HOME; ?>/credits.php">Credits</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->


    <div class="tb-row-fluid">
        <div class="tb-page-header jumbo">
            <div id="site-title">
                <h1><?= $page_title; ?></h1>
                <?= isset($page_description) ? "<small>$page_description</small>": ''; ?>
            </div>
        </div>
    </div>
    <div class="tb-container">