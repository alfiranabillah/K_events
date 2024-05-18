<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/styles/home.css">
    <title>K-EVENTS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <div class="logo d-flex align-items-center">
                    <div class="logo-img me-3">
                        <img src="/frontend/images/image 102.png" alt="">
                    </div>
                    <div class="title-navbar">
                        K-EVENTS
                    </div>
            </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a class="btn btn-primer" type="submit" href="{{ route('login')}}">Login</a>
            </form>
          </div>
        </div>
    </nav>

  <div class="container mt-5 d-flex justify-content-evenly flex-wrap ">

  @yield('content')
        
  </div>

     
    
</body>
<script src="/frontend/libraries/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</html>