<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap 5.2 Template">
    <meta name="author" content="Reconix">
    <title>Quetrix | Bootstrap v5.2 Theme</title>

    <!--=:: CSS Dependencies ::=-->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!--=:: CSS Theme Syles ::=-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--=:: Fonts ::=-->
    <link href="assets/bootstrap/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">

    <style>
    /* TEST STUFF: We'll clean this up later */

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      #nav-container {
        padding: 12px 0px;
        transition = all 0.5s;
      }

      .navbar {
        border-bottom: 4px solid #4f5966
      }

      .bg-dark {
        background: rgb(10,10,10);
        background: linear-gradient(180deg, rgb(20 20 20) 0%, rgb(41 48 56) 100%)
      }

      .navbar-brand {
        line-height: 10px;
        font-size: 24px;
        font-variant: small-caps;
        letter-spacing: 3.5px;
      }

      #navbar-brand {}

      .navbar-nav > li {
        margin-top: 5px;
        padding:0px;
        line-height: 10px;
        font-family: 'Chivo', serif;
        letter-spacing: 0.4px;
      }

      .navbar-nav > .nav-item > .nav-link:hover {
        color:#fff;
        padding-top: 6px;
        transition: all 0.5s;
      }

      .text-end > .btn {
        padding: 5px 17px 5px 17px;
        transition: all 0.8s;
      }

      /* / / / / / / / / / / / / / / / / / / / */

      .bg-gradient-que {
        background-image: linear-gradient(
          0deg,
          hsl(0deg 0% 95%) 0%,
          hsl(213deg 9% 55%) 19%,
          hsl(215deg 9% 56%) 45%,
          hsl(0deg 0% 98%) 100%
        );
      }

      .c-demo {
        margin-top: 110px;
        margin-bottom: 50px;
      }

      /* / / / / / / / / / / / / / / / / / / / */


      .btn-sign-up {
        color: #5fcf9b;
        border-color: #198754;
      }
      .btn-sign-up:hover {
        color: #fff !important;
        background-color: #198754 !important;
        border-color: #39c182 !important;
      }

      .btn-login {
        color: #0dcaf0;
        border-color: #0dcaf0;
      }
      .btn-login:hover {
        color: #fff !important;
        background-color: #0089c7 !important;
        border-color: #00d4ffa1 !important;
      }

    </style>

  </head>
  <body>

<!--=:: Top Nav ::=-->
<!-- Probably won't have one, it'll be here if we do -->

<!--=:: Main Menu ::=-->
<?php include_once 'inc/header.php'; ?>

<!--=:: Content Area ::=-->
<main class="bg-gradient-que">

  <?php
  // Just a basic page atm, fancy stuff added later for home
  //include_once 'inc/carousel.php'; ?>

  <div class="container c-demo">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Heading</h2>

        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <!-- <hr class="featurette-divider"> -->

  </div><!-- /.container -->

  <?php include_once 'inc/footer.php';?>
</main>

  <!--=:: JS Dependencies ::=--->
  <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

  <script>
  // TEST STUFF: We'll clean this up later
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {

    // Lets set some easy vars
    const navBrand = document.getElementById("navbar-brand");
    const navContainer = document.getElementById("nav-container");
    const navLogin = document.getElementById("btn-login");
    const navSignup = document.getElementById("btn-sign-up");

    if (document.body.scrollTop > 380 || document.documentElement.scrollTop > 380) {
      // Logo
      navBrand.style.letterSpacing = "1px";
      navBrand.style.transition = "all 0.8s";
      // Navigation
      navContainer.style.padding = "0px";
      navContainer.style.fontSize = "13px";
      navContainer.style.transition = "all 0.5s";
      // Buttons
      navLogin.style.padding = "4px 7px 4px 7px";
      navSignup.style.padding = "4px 7px 4px 7px";
      navLogin.style.fontSize = "12px";
      navSignup.style.fontSize = "12px";
    } else {
      // Logo
      navBrand.style.letterSpacing = "4px";
      // Navigation
      navContainer.style.padding = "10px";
      navContainer.style.fontSize = "15px";
      navContainer.style.transition = "all 0.5s";
      // Buttons
      navLogin.style.padding = "5px 17px 5px 17px";
      navLogin.style.fontSize = "14px";
      navSignup.style.fontSize = "14px";
      navSignup.style.padding = "5px 17px 5px 17px";
    }

    // Going Up Button
    const goingUp = document.getElementById("btn-going-UP");

    if (document.body.scrollTop > 390 || document.documentElement.scrollTop > 390) {
      goingUp.style.opacity = "95";
    } else {
      goingUp.style.opacity = "0";
    }

    goingUp.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

  }

  </script>

</body></html>
