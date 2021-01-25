<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="icon" type="image/png" href="img/amer-lat.png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Voyage Amérique latine</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <?php
    $ip_addr = strval($_SERVER['REMOTE_ADDR']);
    $ip_txt = fopen('ip.txt', 'r+');
    $today = date("F j, Y, g:i a");
    $txt_to_write = $ip_addr+$today;
    file_put_contents('ip.txt', PHP_EOL.$txt_to_write, FILE_APPEND);
    fclose($ip_txt);
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="itin.html">Notre Itinéraire</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ur.html">Dernier Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/mp.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          	<div id="content-desktop">
            	<h1><font style="font-family: American Typewriter", color="#FAFF5A">Amérique <br> latine</font></h1>
            </div>
            <!-- <span style="color: black; class="subheading">Suivez notre périple</span> -->
          </div>
        </div>
      </div>
    </div>
    	<img class="image2" src="img/logo_centre.jpg">
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <div class="post-preview">
          <a href="ur.html">
            <h2 class="post-title">
              Uruguay
            </h2>
            <h3 class="post-subtitle">
              Colonia Del Sacramento, Montevideo, Punta Del Este, Piriapolis, Salto
            </h3>
          </a>
          <p class="post-meta">Mis à jour par 
            <a href="#">Paul et Emilie</a>
            le 29 avril 2020</p>
        </div>

        <hr>

        <div class="post-preview">
          <a href="ar.html">
            <h2 class="post-title">
              Buenos Aires et environs
            </h2>
            <h3 class="post-subtitle">
              Buenos Aires et Tigre
            </h3>
          </a>
          <p class="post-meta">Mis à jour par 
            <a href="#">Paul et Emilie</a>
            le 08 mars 2020</p>
        </div>

        <hr>
        
        <div class="post-preview">
          <a href="before_travel.html">
            <h2 class="post-title">
              Avant le voyage
            </h2>
            <h3 class="post-subtitle">
              Préparatifs
            </h3>
          </a>
          <p class="post-meta">Mis à jour par
            <a href="#">Paul</a>
            le 04 février 2020</p>
        </div>
        <!--<hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Failure is not an option
            </h2>
            <h3 class="post-subtitle">
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on July 8, 2019</p>
        </div>
        <hr>
    -->
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Articles plus anciens &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; empaamsu 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>