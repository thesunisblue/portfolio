
/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function ajouterClasseOnScroll() {
  var headerElement = document.querySelector('.header');

  if (headerElement) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 0) {
        headerElement.classList.add('onscroll');
      } else {
        headerElement.classList.remove('onscroll');
      }
    });
  } else {
    console.error("L'élément .header est introuvable.");
  }
}
ajouterClasseOnScroll();