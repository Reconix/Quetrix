<!--=:: Footer ::=-->
<style>
  footer {
    border-top: 4px solid #4f5966;
    padding: 20px;
    background: #292f37;
    background: linear-gradient(356deg, rgb(20 20 20) 0%, rgb(41 48 56) 100%);
  }

  .footer-brand {
    letter-spacing: 2.5px;
    font-variant: small-caps;
  }

  .footer-hr {
    border-top: 1px solid #222222;
    border-bottom: 1px solid #6c757d;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }

  #btn-going-UP {
    position: fixed;
    bottom: 45px;
    right: 25px;
    opacity: 0;

    color: #bdbdbd;
    border-color: rgb(255 255 255 / 55%);
    background: rgba(40, 46, 53, 0.8);
    box-shadow: 0 1px 2px rgb(0 0 0 / 88%);

    transition: all 0.5s ease-in-out 0s;
  }

  #btn-going-UP:hover {
    color: #ffffff;
    border-color: rgb(225 225 225 / 98%);
    background: rgb(79, 89, 102);
    box-shadow: 0 1px 2px rgb(0 0 0 / 44%);
  }

</style>

<footer class="">

  <hr class="container footer-hr">

  <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4">

    <div class="col-md-4 d-flex align-items-center">
      <a href="https://github.com/Reconix/Quetrix" class="mb-3 me-2 mb-md-0 footer-brand text-muted text-decoration-none lh-1">
        Quetrix
      </a>
      <span class="mb-3 mb-md-0 text-muted"> © 2022 Company, Inc </span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="fs-5 ms-3"><a class="text-muted" href="https://github.com/Reconix/Quetrix"><i class="bi bi-github"></i></i></a></li>
      <li class="fs-5 ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
      <li class="fs-5 ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
      <li class="fs-5 ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
    </ul>
  </div>
</footer>

<!-- Going Up ? -->
<button type="button" class="btn" id="btn-going-UP">
  <i class="bi bi-chevron-up"></i>
</button>
