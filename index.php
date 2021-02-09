<?php

// Framework file. DO NOT DELETE!
require_once 'm/m.php';

// Add your controllers here.
require_once 'controller/HomeController.php';
// Add your controllers here.
require_once 'controller/DosenController.php';
// Here is the place for your model scripts.
require_once 'model/StudentModel.php';

// Here is the place for your model scripts.
require_once 'model/DosenModel.php';

use m\Settings;
use m\Application;

$settings = Settings::getInstance();

// The app folder relative to your htdocs folder.
$settings->setAppFolder('/mphpf');

// Add your DB settings. This is not the best practice, but it is okay for now.
$settings->setDbConnection(array(
    'server'   => 'localhost',      // Local MySQL server
    'database' => 'mphp_sample_db', // Your DB name
    'username' => 'root',           // Default username
    'password' => ''                // Default password
));

// This is how to set up your route
// Normally consists of:
/*
    array('URL/typed/in/the/browser', 'ControllerName', 'MethodName');
*/
$settings->setRoute(array(
    array('/', 'Home', 'index'),
    array('/index.php', 'Home', 'index'),
    array('/add-new-student', 'Home', 'addStudent'),
    array('/data-dosen', 'Dosen', 'index'),
    array('/add-new-dosen', 'Dosen', 'addDosen')
    // Add your other routs here...

    // Below are some examples of other valid routing
    /*
    array('/url/*', 'Home', 'url'),
    array('/search', 'Home', 'search'),
    array('/vision', 'Vision', 'index'),
    array('/publikasi-jti', 'PublikasiJTI', 'index'),
    array('/api/contacts', 'Api', 'contacts')
    */
));
$app = new Application($settings);
// var_dump($app) or die;

// Execute the application!
$app->run();