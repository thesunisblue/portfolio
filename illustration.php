<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="projet.css">
    <title>Document</title>
</head>
<body>
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="/webdesign.html" class="header__menu__item">Webdesign</a>
      <a href="/illustration.html" class="header__menu__item">Illustration</a>
            <a href="/logo.html" class="header__menu__item">Logo</a>
      <a href="/CVBourPauline.pdf" class="header__menu__item" role="button" target="blank"> Télécharger mon CV</a>
    </div>

    </div>
    <header class="header">
      <a href="/"><img class="header__logo" src="/logo.svg"/></a>
      <nav class="header__menu">
        <a href="/webdesign.html" class="header__menu__item">Webdesign</a>
        <a href="/illustration.html" class="header__menu__item">Illustration</a>
            <a href="/logo.html" class="header__menu__item">Logo</a>
        <a href="/CVBourPauline.pdf" class="header__menu__item" role="button" target="blank"> Télécharger mon CV</a>
      </nav>
      <div class="header__burger__icon">
      <a onclick="openNav()">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="27px" viewBox="0 0 34 27" enable-background="new 0 0 34 27" xml:space="preserve">
      <rect fill="#414144" width="34" height="4"/>
      <rect y="11" fill="#414144" width="34" height="4"/>
      <rect y="23" fill="#414144" width="34" height="4"/>
      </svg>
      </div>

      <div class="header__icons">
        <a href="https://github.com/thesunisblue" target="blank"><img class="github" src="" /></a>
      </div>
  </header>
    <div id="gridThumbs" class="portfolio-grid-overlay grid-wrapper collection-content-wrapper">
        <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/the-girl.png"/>               
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
          <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/cute-cats.png"/>               
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
          <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/balloon.png"/>
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
          <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/legs.png"/>               
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/chikipi.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/ours.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/ratus.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/rhino.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/cat-lino.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
      <a class="grid-item" href="">
        <div class="grid-image">
          <div class="grid-image-inner-wrapper">
            <img src="/illustration/stickers.png"/>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </a>
          <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/sketch.png"/>               
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
          <a class="grid-item" href="">
            <div class="grid-image">
              <div class="grid-image-inner-wrapper">
            <img src="/illustration/the-girl-2.png"/>               
              </div>
            </div>
            <div class="portfolio-overlay"></div>
          </a>
    </div>
  <footer>
    <div class="container">
      <p>©2024 | Design &amp; code fait avec &hearts; par Pauline Bour</p>
    </div> <!-- /.wrapper -->
  </footer>
    <script src="/main.js"></script>
</body>
</html>
