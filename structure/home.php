
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../midia/icones/logo2.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Moonlab Inc.">
    <title>Cerlem Revestimentos</title>

    <!-- STYLE -->
    <link href="style/style.css" rel="stylesheet">
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      img[data-src] {
        opacity: 0;
        transform: scale(0);
      }

      img[src] {
        opacity: 1;
        transform: scale(1);
        transition: .800s ease-in-out;
      }
    </style>
    <!-- STYLE -->
     
    <!-- SCRIPT -->
    <script src="js/script.js"></script>
    <script src="../framework/jquery/jquery-3.7.1.slim.min.js"></script>
    <script src="../framework/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      window.addEventListener('scroll', carregarImagensAoDescerTela);

      function carregarImagensAoDescerTela() {
        let imagens = document.querySelectorAll('.imgTela');
        for (let i = 0; i < imagens.length; i++) {
          if (document.querySelector("#imgControler"+i).getBoundingClientRect().top < window.innerHeight) {
            imagens[i].src = imagens[i].getAttribute('data-src');
          } else {
            imagens[i].removeAttribute('src');
          }
        }
      }
    </script>
    <!-- SCRIPT -->
  </head>
  <body id="Home">

    <!-- HEADER -->
    <?php
      include("header.php")
    ?>
    <!-- HEADER -->

    <main role="main">
      <div class="container-md">
        <div id="carouselExampleCaptions" class="carousel slide container-md">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../midia/outras/carrosel-1.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo</h5>
                <p>Texto</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../midia/outras/carrosel-2.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo</h5>
                <p>Texto</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../midia/outras/carrosel-3.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo</h5>
                <p>Texto</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="sobre">
          <div class="col-sm-12 col-md-12 completar-bloco"></div>
          <div class="col-md-5 col-sm-12 text-center">
            <h2 class="titulo-azul featurette-heading">Titulo</h2>
            <p class="subtexto-preto lead">Texto.</p>
          </div>
          <div id="imgControler0" class="col-md-7 mx-auto text-center">
            <img class="imgTela img-responsive bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350px" height="auto" data-src="../midia/outras/home-3.jpeg"preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
          </div>
          <div class="col-md-12 completar-bloco"></div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="servicos">
          <div class="col-md-12 completar-bloco"></div>
          <div class="col-md-5 order-md-2 text-center">
            <h2 class="titulo-azul featurette-heading">Titulo</h2>
            <p class="subtexto-preto lead">Texto.</p>
          </div>
          <div id="imgControler1" class="col-md-7 order-md-1 mx-auto text-center">
            <img class="imgTela img-responsive bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350px" height="auto" data-src="../midia/outras/home-2.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
          </div>
        </div>
        <div class="col-md-12 completar-bloco"></div>

        <hr class="featurette-divider">

        <div class="row featurette" id="sobre">
          <div class="col-sm-12 col-md-12 completar-bloco"></div>
          <div class="col-md-5 col-sm-12 text-center">
            <h2 class="titulo-azul featurette-heading">Titulo</h2>
            <p class="subtexto-preto lead">Texto.</p>
          </div>
          <div id="imgControler2" class="col-md-7 mx-auto text-center">
            <img class="imgTela img-responsive bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350px" height="auto" data-src="../midia/outras/home-4.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
          </div>
          <div class="col-md-12 completar-bloco"></div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="servicos">
          <div class="col-md-12 completar-bloco"></div>
          <div class="col-md-5 order-md-2 text-center">
            <h2 class="titulo-azul featurette-heading">Titulo</h2>
            <p class="subtexto-preto lead">Texto.</p>
          </div>
          <div id="imgControler3" class="col-md-7 order-md-1 mx-auto text-center">
            <img class="imgTela img-responsive bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350px" height="auto" data-src="../midia/outras/home-1.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
          </div>
        </div>
        <div class="col-md-12 completar-bloco"></div>
      </div>
    </main>

    <!-- FOOTER -->
    <?php
      include("footer.php")
    ?>
    <!-- FOOTER -->

  </body>
</html>
<script>
  window.addEventListener('scroll', carregarImagensAoDescerTela);
</script>