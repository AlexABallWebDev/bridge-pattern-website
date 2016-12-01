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
    <div class="container header">
      <h1>{{ @title }}</h1>
    </div>

    <!-- Tutorial Content -->
    <div class="container tutorial">
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
      <blockquote class="quote">
        Decouple an abstraction from its implementation so that the
        two can vary independently.
      </blockquote>

      <p>
        This pattern is visually described by the UML diagram below.
      </p>
      <div class="image-container">
        <img class="bridge-uml"
              src="images/Bridge_UML_class_diagram.svg"
              alt="UML Diagram of the Bridge Pattern and its participants." />
      </div>

      <p>
        The participants in this pattern are:
      </p>
        <div class="list-group">
          <div class="list-group-item">
            <h3 class="list-group-item-heading">Abstraction</h3>
            <p class="list-group-item-text">
              An abstract class representing the more abstract part of an
              intended piece of functionality.
            </p>
          </div>
          <div class="list-group-item">
            <h3 class="list-group-item-heading">RefinedAbstraction</h3>
            <p class="list-group-item-text">
              A more refined abstraction, an extension of the Abstraction
              class. This pattern is intended to allow for many different
              RefinedAbstraction classes.
            </p>
          </div>
          <div class="list-group-item">
            <h3 class="list-group-item-heading">Implementor</h3>
            <p class="list-group-item-text">
              An interface or abstract class representing the implementation
              of the intended piece of functionality.
            </p>
          </div>
          <div class="list-group-item">
            <h3 class="list-group-item-heading">ConcreteImplementor</h3>
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

      <h2>Benefits of using a Bridge</h2>

      <p>
        The major benefit is that the abstraction is separated from the
        implementation completely. This results in two separate class
        hierarchies. One for the abstraction and one for the implementation.
      </p>

      <p>
        Another benefit is that it can reduce the number of classes needed in
        certain cases. An example of this is shown in the next section.
      </p>

      <h2>Where should a Bridge be used?</h2>

      <p>
        The Bridge Pattern should be used in cases where a class hierarchy
        branches out due to different permutations of functionality. For
        example, let's say there is a set of vehicles. A car needs to have
        an engine to move. An airplane also needs an engine to move.
      </p>

      <p>
        Now let's say there are different engines that require different fuels
        (gasoline, diesel, etc.) to operate. A class hierarchy for this scenario
        would look something like the below UML diagram.
      </p>
      <div class="image-container">
        <img class="bridge-uml"
              src="images/vehicles_with_different_fuel_types.PNG"
              alt="UML Diagram of a Vehicle class and several Child classes." />
      </div>

      <p>
        This hierarchy is exploding quickly, and only gets worse as additional
        vehicles or engines are added. The bridge pattern can simplify such
        class hierarchies by separating the vehicle (abstraction) from the
        engine (implementor):
      </p>
      <div class="image-container">
        <img class="bridge-uml"
              src="images/bridged_vehicles_with_engines.PNG"
              alt="UML Diagram of the Vehicle class and a new Engine class." />
      </div>

      <h2>Bridge Pattern Example</h2>

      <p>
        Below is some sample abstractions in the form of vehicles, based on the
        above UML diagrams:
      </p>

      <pre class="code-sample"><include href="{{ @code_sample_abstractions }}" /></pre>

      <p>
        And some sample implementors in the form of engines:
      </p>

      <pre class="code-sample"><include href="{{ @code_sample_implementors }}" /></pre>

      <p>
        Finally, a main method showing how it would work in practice. A car
        with a gas engine would rev its engine, "VROOOOM", then move forward.
        A car with an electric engine would rev and then move forward with no
        sound. Of course, an airplane works similarly, allowing any engine
        to be used to fly as long as it has a move() method.
      </p>

      <pre class="code-sample"><include href="{{ @code_sample_main }}" /></pre>

      <p>
        If you want to see a real-world example of the Bridge pattern, then look
        at the
        <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/jdbc/"
              target="_blank">
          Java Database
          Connectivity (JDBC) API
        </a>
        in Java.
        The JDBC (abstraction) is used to interface with a database,
        but it must have a driver (implementor) for the given type of database.
        The driver is what actually interacts with the database, the JDBC
        classes simply call methods on the given driver.
      </p>

      <h2>Notes for other Patterns</h2>

      <p>
        The strategy pattern is very similar to the bridge pattern. Both aim to
        decouple an abstraction (context) from its implementors (strategies). The
        difference is in the reasons for decoupling. Bridge is a structural
        pattern, whereas strategy is a behavioral pattern. Bridge is intended
        to reduce the size of class hierarchies and enable extensions of both
        the abstraction and implementor. Strategy is intended to enable runtime
        choice of algorithm and reuse of a context with different algorithms.
      </p>

      <p>
        If you are using the Adapter pattern, then you may be trying to fix
        a problem that could have been solved via the Bridge pattern. The
        Adapter pattern makes an uncompatible class work with other classes
        expecting a certain abstraction. The Bridge Pattern already
        allows the abstraction and implementation to vary, so no incompatibility
        occurs in the first place.
      </p>

      <p>
        The Gang of Four suggests using the Abstract Factory
        Pattern with the Bridge Pattern. This is a good idea in many cases as
        the Bridge Pattern creates a situation with two families of objects
        (abstractions and implementors). One abstraction and one implementor is
        needed for Bridge Pattern, and an Abstract Factory can initialize these
        objects.
      </p>

      <!-- APA citations for my research -->
      <h2>Sources</h2>
      <div class="research-sources">
        <p>
          <i>Bridge</i>. (n.d.).
          Retrieved November 30, 2016, from
          <a href="https://sourcemaking.com/design_patterns/bridge" target="_blank">
            https://sourcemaking.com/design_patterns/bridge
          </a>
        </p>
        <p>
          Banas, Derek (2012, October 1). <i>Bridge Design Pattern</i>.
          [Video File] Retrieved November 30, 2016, from
          <a href="https://www.youtube.com/watch?v=9jIgSsIfh_8" target="_blank">
            https://www.youtube.com/watch?v=9jIgSsIfh_8
          </a>
        </p>
        <p>
          Gamma, E., Helm, R., Johnson, R., &amp; Vislissides, J. (1995).
          <i>Design patterns: Elements of reusable object-oriented software</i>.
          Reading, MA: Addison-Wesley.
        </p>
      </div>

      <!-- Link to my website -->
      <div class="alexb-website-link">
        <a href="http://alexb.greenrivertech.net/">
          Visit Alex Ball's Website
        </a>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>
</html>
