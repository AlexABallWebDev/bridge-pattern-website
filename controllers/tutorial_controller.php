<?php
class TutorialController {
  private $router;

  public function __construct($router) {
    $this->router = $router;
  }

  public function viewTutorial() {
    $this->router->set('title', 'Bridge Pattern');

    print(Template::instance()->render('views/tutorial.php'));
  }
}
?>
