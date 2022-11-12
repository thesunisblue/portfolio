<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <!-- The overlay -->
	<div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
            <a href="#projects" class="header__menu__item">Projets</a>
            <a href="#" class="header__menu__item">Compétences & Outils</a>
            <a href="#" class="header__menu__item">A propos</a>
            <a href="#" class="header__menu__item">Contact</a>
            <a href="https://www.instagram.com/somewhereonlywedraw/" target="blank"><img class="instagram" src="/instagram.svg" /></a>
            <a href="https://github.com/thesunisblue" target="blank"><img class="github" src="/github-icon.svg" /></a>
</div>

</div>
    <header class="header"> 
        <img class="header__logo" src="/logo.svg" />
        <nav class="header__menu">
            <a href="#projects" class="header__menu__item">Projets</a>
            <a href="#" class="header__menu__item">Compétences & Outils</a>
            <a href="#" class="header__menu__item">A propos</a>
            <a href="#" class="header__menu__item">Contact</a>
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
        <a href="https://www.instagram.com/somewhereonlywedraw/" target="blank"><img class="instagram" src="/instagram.svg" /></a>
        <a href="https://github.com/thesunisblue" target="blank"><img class="github" src="/github-icon.svg" /></a>
        </div>
    </header>
    <div class="block__presentation">
        <img class="" src="/pauline-profil.png"/>
        <div class="block__presentation__introduction">
        <p class="block__presentation__title">Hey ! C’est Pauline </p>
        <p class="block__presentation__description">Webdesigner & Intégratrice, très intéréssée par le domaine de l’illustration, l’animation, et le développement web, j’adore apprendre et cherche à acquérir de nouvelles compétences !</p>
        </div>
    </div>

    <div class="block__expertises">
      <div class="block__expertises__item">
        <p>Webdesign</p>
      </div>
      <div class="block__expertises__item">
        <p>Illustration</p>
      </div>
      <div class="block__expertises__item">
        <p>Intégration</p>
      </div>
      <div class="block__expertises__item">
        <p>Motion design</p>
      </div>
    </div>

    <div class="container">
    <div id="projects">
      <div class="project__header">
      <p>Quelques récents projets</p> 
      <div class="projects__menu">
      <a href="#" class="projects__menu__item">Tous les projets</a>
      <a href="#" class="projects__menu__item">Webdesign</a>
      <a href="#" class="projects__menu__item">Intégration</a>
      <a href="#" class="projects__menu__item">Illustration</a>
      <a href="#" class="projects__menu__item">Motion design</a>
      </div>
      </div>
      <div class="projects__section">
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
      </div>
      <div class="projects__section">
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="projects__section__item">
          <img src="/ex-projet.png"/>
          <div class="projects__section__item__title">
          <p>PROJECT NAME</p>
          </div>
          <p class="projects__section__item__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
      </div>
    </div>
    </div>

    <script>

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</body>

</html>