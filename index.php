<?php
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of th Base class
$f3 = Base::instance();
$f3 -> set('DEBUG',3);
//run fat free
//$f3 -> run();
// define a default route

$f3 -> route('GET /', function ()
{
    $view = new Template();
    echo $view -> render('views/pet-home.html');
}
);

$f3 -> route('GET /order', function ()
{
    $view = new Template();
    echo $view -> render('views/pet-order.html');
}
);
$f3 -> run();
