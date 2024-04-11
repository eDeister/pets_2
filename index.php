<?php
//Set error reporting true
ini_set('error_reporting',1);
error_reporting(E_ALL);

//Require autoload for all locally created classes, etc
require_once ('vendor/autoload.php');

//Instantiate fat free object
$f3 = Base::instance();

//Define a default route that just echoes a <p>
$f3->route('GET /', function() {
    echo "<p>Pet Home</p>";
});

//Run fat free object
$f3->run();