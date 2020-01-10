<?php

// This is our controller!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the auto load file that was generated when installing composer
require_once("vendor/autoload.php");

// Create an instance of the base class (an instance of the fat-free framework)
$f3 = Base::instance(); // :: = static method called instance on the base class
// assigning to a reference variable $f3

// Define a DEFAULT route (like a home page) -- NEEDS TO GO BEFORE RUN EXECUTION
$f3->route('GET /', function() {
    echo '<h1>Howdy!</h1>'; // cannot navigate there with index.php in the browser
});

// Run fat-free (execute run method on the object that we created)
$f3->run();
