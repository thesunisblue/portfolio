<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="projet.css">
    <title>Webdesign - Popscreativestudio</title>
</head>
<body>
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <a href="/webdesign.php" class="header__menu__item">Webdesign</a>
        <a href="/illustration.php" class="header__menu__item">Illustration</a>
        <a href="/logo.php" class="header__menu__item">Logo</a>
        <a href="/CVBourPauline.pdf" class="header__menu__item" role="button" target="blank"> Télécharger mon CV</a>
    </div>

</div>
<header class="header">
    <a href="/"><img class="header__logo" src="/logo.svg"/></a>
    <nav class="header__menu">
        <a href="/webdesign.php" class="header__menu__item">Webdesign</a>
        <a href="/illustration.php" class="header__menu__item">Illustration</a>
        <a href="/logo.php" class="header__menu__item">Logo</a>
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
    <a class="grid-item" target="_blank" href="https://www.figma.com/proto/Y9Y4dJXEJAIzJAvXbQrjX6/Kalamata-Paris?page-id=0%3A1&node-id=82-428&starting-point-node-id=82%3A428&scaling=scale-down-width&mode=design&t=Zsfb8RiVLdMweikp-1">
        <div class="grid-image">
            <div class="grid-image-inner-wrapper">
                <img src="/maquettage/kalamata.jpg"/>
            </div>
        </div>
        <div class="portfolio-overlay"></div>
        <div class="portfolio-text">
            <h3 class="portfolio-title">Kalamata</h3>
        </div>
    </a>
    <a class="grid-item" target="_blank" href="https://www.figma.com/file/MDv1EcBaCTBXHq5FUUljAn/Untitled?node-id=3%3A16&t=wyJLv0dFKaoyS1YC-1">
        <div class="grid-image">
            <div class="grid-image-inner-wrapper">
                <img src="/maquettage/photographe.jpg"/>
            </div>
        </div>
        <div class="portfolio-overlay"></div>
        <div class="portfolio-text">
            <h3 class="portfolio-title">Camille Bourgeau Photographe</h3>
        </div>
    </a>
    <a class="grid-item" target="_blank" href="https://www.figma.com/file/0Q905kxzNdFyXvCtNThfqw/Anne-Sophrologie?node-id=1%3A2&t=m90ZFnb7mwBy3HVD-1">
        <div class="grid-image">
            <div class="grid-image-inner-wrapper">
                <img src="/maquettage/sophrologie.jpg"/>
            </div>
        </div>
        <div class="portfolio-overlay"></div>
        <div class="portfolio-text">
            <h3 class="portfolio-title">Anne Sophrologie</h3>
        </div>
    </a>
</div>
    <?php include("footer.php");?>
</body>
</html>