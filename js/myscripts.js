

// $("#expandmenu").on( "click", function() {
//  $(".mobile-menu").css("display", "block");
// });
$('#expandmenu').on('click', function(e){
    e.preventDefault();
    if($(".mobile-menu").hasClass('active')){
      $(".mobile-menu").removeClass('active');
    }  else{
        $(".mobile-menu").addClass('active');
    }

})


$(".right-text-dark-scroll").on( "click", function() {
 $("#scrolltarget").get(0).scrollIntoView();
});
$( window ).resize(function() {
  var windowHeight = $(window).height();
	var windowWidth = $(window).width();
  if( windowWidth < 1030){
        $(".navbarcontent").css("display", "none");
        $(".navbarcontent1").css("display", "block");

  }
  else{
        $(".navbarcontent1").css("display", "none");
        $(".navbarcontent").css("display", "block");
        $("#moved-left-img").css("display", "");
    		$(".homepage-white").css("display", "");
    		$(".main-text-field").css("display", "");
    		$("p").css("text-align", "left");
    		$("h3").css("text-align", "left");
    		$("h1").css("text-align", "left");
    		$("h2").css("text-align", "left");
    		$("h4").css("text-align", "left");
        $(".fottermenu").css("text-align", "left");
        $(".fottermenusocial").css("text-align", "left");
    		$("#phone-team").css("text-align", "left");
    		$("#phone-team2").css("text-align", "left");
    		$("#phone-team3").css("text-align", "left");
    		$("#phone-team4").css("text-align", "left");
        $(".team-us").css("text-align", "left");
    		$("#phone-team").addClass("pr-5");
    		$("#phone-team2").addClass("pr-5");
    		$("#phone-team3").addClass("pr-5");
    		$("#phone-team4").addClass("pr-5");
    	  $("p").addClass("pr-5");
    		$(".bg-main-mobile").removeClass("bg-main-mobile").addClass("bg-main");
    		$(".mobile-buttons").removeClass("mobile-buttons").addClass("animatedlink");
    		$(".button-on-dark").removeClass("mobile-buttons2").addClass("mobile-buttons");
          $('.imgfooter').css("text-align", "left");
  }
  if(windowWidth>windowHeight){
    $('#expandmenu').css("top", "5vw");

  }
  if(windowWidth<windowHeight){
    $('#expandmenu').css("top", "5vh");

  }
  if (1030 > windowWidth) {
    $("#moved-left-img").css("display", "none");
		$(".homepage-white").css("display", "none");
		$(".main-text-field").css("display", "none");
		$("p").css("text-align", "center");
		$("h3").css("text-align", "center");
		$("h1").css("text-align", "center");
		$("h2").css("text-align", "center");
		$("h4").css("text-align", "center");
    $(".fottermenu").css("text-align", "center");
    $(".fottermenusocial").css("text-align", "center");
		$("#phone-team").css("text-align", "center");
		$("#phone-team2").css("text-align", "center");
		$("#phone-team3").css("text-align", "center");
		$("#phone-team4").css("text-align", "center");
    $(".team-us").css("text-align", "center");
		$("#phone-team").removeClass("pr-5");
		$("#phone-team2").removeClass("pr-5");
		$("#phone-team3").removeClass("pr-5");
		$("#phone-team4").removeClass("pr-5");
	  $("p").removeClass("pr-5");
		$(".bg-main").removeClass("bg-main").addClass("bg-main-mobile");
		$(".animatedlink").removeClass("animatedlink").addClass("mobile-buttons");
		$(".button-on-dark").removeClass("mobile-buttons").addClass("mobile-buttons2");
      $('.imgfooter').css("text-align", "center");



}});
$(document).ready(function() {
  var windowHeight = $(window).height();
	var windowWidth = $(window).width();
  if( windowWidth < 1030){
        $(".navbarcontent").css("display", "none");
        $(".navbarcontent1").css("display", "block");

  }
  else{
        $(".navbarcontent1").css("display", "none");
        $(".navbarcontent").css("display", "block");
  }
  if(windowWidth>windowHeight){
    $('#expandmenu').css("top", "5vw");
  }
  if (1030 > windowWidth) {
    $("#moved-left-img").css("display", "none");
		$(".homepage-white").css("display", "none");
		$(".main-text-field").css("display", "none");
		$("p").css("text-align", "center");
		$("h3").css("text-align", "center");
		$("h1").css("text-align", "center");
		$("h2").css("text-align", "center");
		$("h4").css("text-align", "center");
    $(".fottermenu").css("text-align", "center");
    $(".fottermenusocial").css("text-align", "center");
		$("#phone-team").css("text-align", "center");
		$("#phone-team2").css("text-align", "center");
		$("#phone-team3").css("text-align", "center");
		$("#phone-team4").css("text-align", "center");
    $(".team-us").css("text-align", "center");
		$("#phone-team").removeClass("pr-5");
		$("#phone-team2").removeClass("pr-5");
		$("#phone-team3").removeClass("pr-5");
		$("#phone-team4").removeClass("pr-5");
	  $("p").removeClass("pr-5");
		$(".bg-main").removeClass("bg-main").addClass("bg-main-mobile");
		$(".animatedlink").removeClass("animatedlink").addClass("mobile-buttons");
		$(".button-on-dark").removeClass("mobile-buttons").addClass("mobile-buttons2");
      $('.imgfooter').css("text-align", "center");



}



});
