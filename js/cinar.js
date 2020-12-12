const faders = document.querySelectorAll('.fade-in');
const sliders = document.querySelectorAll('.slide-in');
const sliding = document.querySelector(".carouselbox")



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







 // slider faaliet alani//
 var scrollPerClick;
 var ImagePadding = 20
 
 
 var scrollAmount = 0;
function sliderScrollLeft(){
  sliding.scrollTo ({
     top: 0,
     left: (scrollAmount -= scrollPerClick),
     behavior: "smooth"

  });

if(scrollAmount < 0){
    scrollAmount = 0
}
}

function sliderScrollRight(){
 if(scrollAmount <= sliding.scrollWidth - sliding.clientWidth){
    sliding.scrollTo({
        top: 0,
        left: (scrollAmount += scrollPerClick),
        behavior: "smooth",
    }); 
 }

}


scrollPerClick =380;




//  following code for the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});