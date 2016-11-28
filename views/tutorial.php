<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Author: Alex Ball
    Date:   11/23/2016
    This is the main view for the Bridge Pattern Explanation website.
  -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>{{ @title }}</title>

  <!-- Bootstrap css -->
  <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous" />

  <!-- Bridge Pattern website css -->
  <link rel="stylesheet"
        href="css/styles.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header -->
    <nav class="navbar navbar-inverse navbar-fixed-top header">
      <div class="container">
        <div class="navbar-header">
          <h1>{{ @title }}</h1>
        </div>
      </div>
    </nav>

    <!-- Tutorial Content -->
    <div class="container tutorial">
      <div>
        <h2>Bridge Description</h2>

        <p>
          This page describes the Bridge Pattern, a Design Pattern in the
          world of Software Development. The Bridge pattern aims to separate
          an abstraction from its implementation. This improves maintainability
          by allowing the abstraction to change or be extended without
          affecting the implementation, and vise-versa.
        </p>

        <p>
          The intent of this pattern is formally defined by the Gang of Four
          as to:
        </p>
        <blockquote>
          Decouple an abstraction from its implementation so that the
          two can vary independently.
        </blockquote>

        <p>
          This pattern is visually described by the UML diagram below.
        </p>
        <img class="bridge-uml"
              src="images/Bridge_UML_class_diagram.svg"
              alt="UML Diagram of the Bridge Pattern and its participants."/>

        <p>
          The participants in this pattern are:
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">Abstraction</h4>
              <p class="list-group-item-text">
                An abstract class representing the more abstract part of an
                intended piece of functionality.
              </p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">RefinedAbstraction</h4>
              <p class="list-group-item-text">
                A more refined abstraction, an extension of the Abstraction
                class.
              </p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">Implementor</h4>
              <p class="list-group-item-text">
                An interface or abstract class representing the implementation
                of the intended piece of functionality.
              </p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">ConcreteImplementor</h4>
              <p class="list-group-item-text">
                A concrete implementation of the intended piece of functionality.
                A child/implementor of the Implementor interface/abstract class.
              </p>
            </a>
          </div>
        </p>

        <p>
          The "bridge" that gives this pattern its name is the connection
          between the abstraction and implementation. The abstraction contains
          an implementation and creates methods that call the implementation's
          methods as needed to accomplish a task.
        </p>

        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>
        <p>
        This page describes the Bridge Pattern, a Design Pattern in the
        world of Software Development.
        </p>

        <!-- Link to my website -->
        <div class="alexb-website-link">
          <a href="http://alexb.greenrivertech.net/">Visit Alex Ball's Website</a>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
