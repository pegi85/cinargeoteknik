

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px 5px";
    document.getElementById("logo").style.width = "130px";
    document.getElementById("logo").style.marginTop = "0px";
    document.getElementById("navbar").style.backgroundColor = "rgb(255, 255, 255)";
    document.getElementById("navbar").style.boxShadow = "5px 5px 10px rgb(38, 124, 27)";
  } else {
    document.getElementById("navbar").style.padding = "10px 3px";
    document.getElementById("logo").style.width = "250px";
    document.getElementById("navbar").style.backgroundColor = "rgb(0, 0, 0,0.0)";
    document.getElementById("navbar").style.boxShadow = "none";
    document.getElementById("logo").style.marginTop = "50px";
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

