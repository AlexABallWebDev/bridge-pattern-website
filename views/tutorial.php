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
    <div class="navbar navbar-inverse navbar-fixed-top header">
      <div class="container">
        <div class="navbar-header">
          <h1>{{ @title }}</h1>
        </div>
      </div>
    </div>

    <!-- Tutorial Content -->
    <div class="container tutorial">
      <h2>Bridge Pattern Tutorial</h2>

      <h3>Bridge Description</h3>

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
      </p>
        <div class="list-group">
          <div class="list-group-item">
            <h4 class="list-group-item-heading">Abstraction</h4>
            <p class="list-group-item-text">
              An abstract class representing the more abstract part of an
              intended piece of functionality.
            </p>
          </div>
          <div class="list-group-item">
            <h4 class="list-group-item-heading">RefinedAbstraction</h4>
            <p class="list-group-item-text">
              A more refined abstraction, an extension of the Abstraction
              class. This pattern is intended to allow for many different
              RefinedAbstraction classes.
            </p>
          </div>
          <div class="list-group-item">
            <h4 class="list-group-item-heading">Implementor</h4>
            <p class="list-group-item-text">
              An interface or abstract class representing the implementation
              of the intended piece of functionality.
            </p>
          </div>
          <div class="list-group-item">
            <h4 class="list-group-item-heading">ConcreteImplementor</h4>
            <p class="list-group-item-text">
              A concrete implementation of the intended piece of functionality.
              A child/implementor of the Implementor interface/abstract class.
              Again, this pattern allows for many different ConcreteImplementors.
            </p>
          </div>
        </div>

      <p>
        The "bridge" that gives this pattern its name is the connection
        between the abstraction and implementation. The abstraction contains
        an implementation and creates methods that call the implementation's
        methods as needed to accomplish a task.
      </p>

      <h3>Benefits of using a Bridge</h3>

      <p>
        The major benefit is that the abstraction is separated from the
        implementation completely. This results in two separate class
        hierarchies. One for the abstraction and one for the implementation.
      </p>

      <p>
        Another benefit is that it reduces the number of classes needed in a
        hierarchy. For example, in a program that
      </p>

      <h3>Where should a Bridge be used?</h3>

      <p>
        The Bridge Pattern should be used in cases where a piece of functionality
        will
      </p>

      <h3>Bridge Pattern Example</h3>

      <p>
        Code example? probably?
      </p>

      <p>
        One real-world example of the Bridge pattern is the
        <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/jdbc/">
          Java Database
          Connectivity (JDBC) API
        </a>
        in Java.
        The JDBC (abstraction) is used to interface with a database,
        but it must have a driver (implementor) for the given type of database.
        The driver is what actually interacts with the database, the JDBC
        classes simply call methods on the given driver.
      </p>

      <h3>Notes for other Patterns</h3>

      <p>
        If you are using the Adapter pattern, then you may be trying to fix
        a problem that could have been solved via the Bridge pattern. The
        Adapter pattern makes an uncompatible class work with other classes
        expecting a certain implementation. The Bridge Pattern already
        allows the implementation to vary, so no incompatibility occurs in
        the first place.
      </p>

      <p>
        The Gang of Four suggests using the Abstract Factory
        Pattern with the Bridge Pattern. This is a good idea in many cases as
        the Bridge Pattern creates a situation with two families of objects
        (abstractions and implementors). One abstraction and one implementor is
        needed for Bridge Pattern, and an Abstract Factory can initialize these
        objects.
      </p>

      <!-- Link to my website -->
      <div class="alexb-website-link">
        <a href="http://alexb.greenrivertech.net/">Visit Alex Ball's Website</a>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
