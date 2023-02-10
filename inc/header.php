<style>

/* Header */
header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 5;
  padding: 0px 0; }

  @media (min-width: 768px) {
    header {
      padding: 30px 0; } }


  header #main-navbar {
  }

  header .navbar {
    padding-top: .5rem;
    padding-bottom: .5rem; }

    @media (min-width: 768px) {
      header .navbar {
        padding-top: 13px;
        padding-bottom: 13px;
         } }



      @media (max-width: 1199.98px) {
        header .navbar .nav-link {
          padding: .5rem 0rem; } }

      header .navbar .nav-link.active {
        color: #fff !important; }

    header .navbar .dropdown-menu {
      font-size: 14px;
      border-radius: 4px;
      border: none;
      -webkit-box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
      box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
      min-width: 13em;
      margin-top: -10px; }

      header .navbar .dropdown-menu:before {
        bottom: 100%;
        left: 10%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #fff;
        border-width: 7px;
        transition: 0.5s all ease;

       }
        @media (max-width: 991.98px) {
          header .navbar .dropdown-menu:before {
            display: none; } }

      header .navbar .dropdown-menu .dropdown-item:hover {
        background: #007bff;
        color: #fff;
        transition: 0.4s all ease;
       }

      header .navbar .dropdown-menu .dropdown-item.active {
        background: #007bff;
        color: #fff; }

      header .navbar .dropdown-menu a {
        padding-top: 7px;
        padding-bottom: 7px; }



  .dropdown:hover .dropdown-menu {
    margin-top: -1px;
    display: block;
    opacity: 1;
    transition: 0.4s all ease;
  }

  .navbar .nav-link {
    position: relative;
    top: 3px;
    padding: 20px 10px;
    outline: none !important;
    /*font-size: 1rem;*/
    color: rgba(255, 255, 255, 0.8) !important;
  }

  .navbar-nav > .nav-item > .nav-link:hover {
    position: relative;
    top: 1px;
  }

  .text-end > .btn {
    padding: 5px 17px 5px 17px;
    transition: all 0.8s;
  }
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

<header>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand me-5" href="#">Quetrix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recipes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Food Catering</a>
              <a class="dropdown-item" href="#">Drink &amp; Beverages</a>
              <a class="dropdown-item" href="#">Wedding &amp; Birthday</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item cta-btn">
            <button type="button" id="btn-login" class="btn btn-login btn-sm me-2"><i class="bi bi-box-arrow-in-right"></i> Login</button>
            <button type="button" id="btn-sign-up" class="btn btn-sign-up btn-sm"><i class="bi bi-person-lines-fill"></i> Sign-up</button>
          </li>
        </ul>

      </div>
    </div>
  </nav>
</header>
<!-- END header -->
