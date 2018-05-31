$(document).ready(function(){
  $('.page').slick({

  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  dots:true,
  appendDots:".navigation"

    
  });
 $('#AboutN').click(function(){
 	alert("home was clicked");
 });

  //below is for the footer
var d=new Date();
var n=d.getFullYear();
document.getElementById("date").innerHTML=n;
});
