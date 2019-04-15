<?php
/**
 * Practice Routing
 */
// Turn on error reporting
ini_set
('display_errors', 1);
error_reporting(E_ALL );

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function () {
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');

});
$f3->route('GET /breakfast', function ()
{
//    echo "<h1>Breakfast page</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/breakfast.html');

}

);

$f3->route('GET /lunch', function ()
{
//    echo "<h1>lunch page</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/lunch.html');

}

);
//Run fat free
$f3->run();

