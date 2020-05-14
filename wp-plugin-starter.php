<?php

/*
Plugin Name: WP Plugin Starter
Description: A WordPress plugin starter to use as a starting template to build a custom plugin
Version: 0.0.1
License: GPL
*/

if (!class_exists('\Psr4AutoloaderClass')) {
    require_once __DIR__.'/autoload.php';
}

// Load PSR 4 Autoloader class
$loader = new \Psr4AutoloaderClass();

// Add namespaces
$loader->addNamespace('WPS\Admin', __DIR__.'/Includes/Admin');
$loader->addNamespace('WPS\Front', __DIR__.'/Includes/Front');

// Register namespaces
$loader->register();
