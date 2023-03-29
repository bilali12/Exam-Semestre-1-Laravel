<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="http://localhost:8000/">TAXIBOKKO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 510px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" href="">A propos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Passager
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Comment ça marche</a></li>
                  <li><a class="dropdown-item" href="">Nos prix et engagements</a></li>

                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chauffeurs
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="">Comment ça marche</a></li>

                    </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Business
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Comment ça marche</a></li>
                  <li><a class="dropdown-item" href="">Nos forfaits</a></li>

                </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="">Se connecter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Inscription
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="">Compte passager</a></li>
                      <li><a class="dropdown-item" href="">Compte chauffeur</a></li>
                      <li><a class="dropdown-item" href="">Compte business</a></li>

                    </ul>
                    </li>
            </ul>

          </div>
        </div>
      </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>
