<?php
//Author:   Alex Ball
//Date:     11/23/2016
//Filename: tutorial_controller.php
//This is the controller for the Bridge Pattern Explanation
//website.
class TutorialController {
  private $router;

  public function __construct($router) {
    $this->router = $router;
  }

  public function viewTutorial() {
    $this->router->set('title', 'Bridge Pattern Tutorial');
    $this->router->set('code_sample_abstractions', 'data/code_sample_abstractions.txt');
    $this->router->set('code_sample_implementors', 'data/code_sample_implementors.txt');
    $this->router->set('code_sample_main', 'data/code_sample_main.txt');

    print(Template::instance()->render('views/tutorial.php'));
  }
}
?>
