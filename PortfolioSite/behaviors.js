$(document).ready(function(){



  $('.page').slick({

  infinite: true,
  speed: 500,
  slidesToShow: 1,
  adaptiveHeight: true,
  responsive:true,
  dots:true,
  mobileFirst:true,
 
  appendDots:".navigation"
 

    
  });
 $('#HomeN').click(function(){
 	$('#slick-slide-control00').click();

 });
 $('#AboutN').click(function(){
 	$('#slick-slide-control01').click();

 });
 $('#ContactN').click(function(){
 	$('#slick-slide-control02').click();

 });
 $('#AQN').click(function(){
 	$('#slick-slide-control03').click();

 });



  //below is for the footer
var d=new Date();
var n=d.getFullYear();
document.getElementById("date").innerHTML=n;

//$('body').css('display','block');

 $('html').css('display','block');
 $('body').css('display','block');
});


function closePbox(){
	console.log('closing privacy notice');
	var privacyBox = document.getElementById('privacybox');
	privacybox.style.display='none';
	privacybox.style.visibility='hidden';
};