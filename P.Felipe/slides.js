var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    var i = 0;
    var slides = document.getElementsByClassName("photos");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        setTimeout(()=>{slides[i].style.opacity = "1"}, 20)     
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(()=>{slides[slideIndex-1].style.opacity = "1";}, 20)
     
  }