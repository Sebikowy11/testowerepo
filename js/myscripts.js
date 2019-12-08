
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
// var has_fired;
// $("html").on("scroll", function () {
//     if (!has_fired && $(this).scrollTop() >= $("#animatedsection").offset().top) {
//       $("#phone-team").addClass("animated jackInTheBox");
//       $("#phone-team2").addClass("animated jackInTheBox");
//       $("#phone-team3").addClass("animated jackInTheBox");
//       $("#phone-team4").addClass("animated jackInTheBox");
//       console.log("udalosie")
//         has_fired = true; // use this if only want fired once
//
//     }
// });


$(".right-text-dark-scroll").on( "click", function() {
 $("#scrolltarget").get(0).scrollIntoView({behavior: "smooth"});
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
    $('#animatedsection').css("visibility", "hidden");
    $('#animatedsection2').css("visibility", "hidden");
    $('#animatedsection3').css("visibility", "hidden");
    $('#animatedsection4').css("visibility", "hidden");
    $('#animatedsection5').css("visibility", "hidden");
    $('#animatedsection6').css("visibility", "hidden");
        $(".navbarcontent1").css("display", "none");
        $(".navbarcontent").css("display", "block");
        $(window).scroll(function() {
           var hT = $('#animatedsection').offset().top,
               hH = $('#animatedsection').outerHeight() - ($('#animatedsection').outerHeight()/2),
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
               console.log(hH);
               $('#animatedsection').css("visibility", "visible");
               $(".animated2").addClass("animated bounceInUp");

           }
        });
        $(window).scroll(function() {
           var hT = $('#animatedsection5').offset().top,
               hH = $('#animatedsection5').outerHeight() - ($('#animatedsection5').outerHeight()/2),
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
               console.log(hH);
               $('#animatedsection5').css("visibility", "visible");
               $(".animated5").addClass("animated bounceInLeft");

           }
        });
        $(window).scroll(function() {
           var hT = $('#animatedsection6').offset().top,
               hH = $('#animatedsection6').outerHeight() - ($('#animatedsection6').outerHeight()/2),
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
               console.log(hH);
               $('#animatedsection6').css("visibility", "visible");
               $(".contact-container").addClass("animated bounceInUp");

           }
        });

        $(window).scroll(function() {
           var hT = $('#animatedsection3').offset().top,
               hH = $('#animatedsection3').outerHeight() -($('#animatedsection3').outerHeight()/2),
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
               console.log(hH);
               $('#animatedsection3').css("visibility", "visible");
               $(".animated3").addClass("animated bounceInRight");

           }
        });

        $(window).scroll(function() {
           var hT = $('#animatedsection2').offset().top,
               hH = 150,
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
             $('#animatedsection2').css("visibility", "visible");
               console.log(hH);
               $("#phone-team").addClass("animated bounceIn");
               $("#phone-team2").addClass("animated bounceIn");
               $("#phone-team3").addClass("animated bounceIn");
               $("#phone-team4").addClass("animated bounceIn");
           }
        });
        $(window).scroll(function() {
           var hT = $('#animatedsection4').offset().top,
               hH = $('#animatedsection4').outerHeight() -($('#animatedsection4').outerHeight()/2),
               wH = $(window).height(),
               wS = $(this).scrollTop();
           if (wS > (hT+hH-wH)){
             $('#animatedsection4').css("visibility", "visible");
               console.log(hH);
               $(".team-us").addClass("animated bounceInLeft");

           }
        });
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
