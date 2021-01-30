<?php
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of th Base class
$f3 = Base::instance();

//set a debug for fat free
$f3 -> set('DEBUG',3);

// define a default route
$f3 -> route('GET /', function ()
{
    $view = new Template();
    echo $view -> render('views/pet-home.html');
}
);

//set a route for order
$f3 -> route('GET /order', function ()
{
    $view = new Template();
    echo $view -> render('views/pet-order.html');
}
);

//set a route for order2
$f3 -> route('POST /order2', function ()
{
    $view = new Template();
    echo $view -> render('views/pet-order2.html');
}
);

//run fat free
$f3 -> run();
