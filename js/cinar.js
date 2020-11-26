const faders = document.querySelectorAll('.fade-in');
const sliders = document.querySelectorAll('.slide-in');



function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px 5px";
    document.getElementById("logo").style.width = "130px";
    document.getElementById("logo").style.marginTop = "0px";
    document.getElementById("navbar").style.backgroundColor = "rgb(255, 255, 255)";
    document.getElementById("navbar").style.boxShadow = "5px 5px 10px rgb(38, 124, 27)";
    document.getElementById("navbar").style.marginTop = "0";
  } else {
    document.getElementById("navbar").style.padding = "10px 3px";
    document.getElementById("logo").style.width = "250px";
    document.getElementById("navbar").style.backgroundColor = "rgb(0, 0, 0,0.0)";
    document.getElementById("navbar").style.boxShadow = "none";
    document.getElementById("logo").style.marginTop = "30px";
    document.getElementById("navbar").style.marginTop = "30px";
  }
}
// changing header size when scrolling . header and navigation fixed top when scrolling//
window.onscroll = function () {

  scrollUpButton();
  scrollFunction();
};


//Get the button
var mybutton = document.getElementById("upBtn");

// When the user scrolls down 20px from the top of the document, show the button


function scrollUpButton() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// slideer fades 
sliders.forEach(slider =>{
  appearOnScroll.observe(slider);
});


// faders

const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -250px 0px"

};
const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
  entries.forEach(entry => {
      if (!entry.isIntersecting) {
          return;
      } else {
          entry.target.classList.add("appear");
          appearOnScroll.unobserve(entry.target);
      };
  });
}, appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});

sliders.forEach(slider => {
  appearOnScroll.observe(slider);
});




// slide show //
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



 