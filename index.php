<?php
//Author:   Alex Ball
//Date:     11/23/2016
//Filename: index.php
//This is the main page for the Bridge Pattern Explanation
//website. This site uses the Fat-Free-Framework.

//load the autoloader
require('vendor/autoload.php');

//get router object
$f3 = require('vendor/bcosca/fatfree-core/base.php');

//create routes
$f3->route('GET /', function($f3) {
  $controller = new TutorialController($f3);
  $controller->viewTutorial();
});

//turn on more verbose error handling through router
$f3->set('DEBUG', 3); //0 means suppressed, 3 means verbose.

//custom error handler
$f3->set('ONERROR', function($f3) {
  print('Error text' . $f3->get('ERROR.text') . '<br />');
  print('Error trace' . $f3->get('ERROR.trace') . '<br />');

  //redirect user to main page.
  //$f3->reroute('http://www.alexb.greenrivertehc.net/projects/bridge-pattern-website');
});

//start router
$f3->run();
?>
