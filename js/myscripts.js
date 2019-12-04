$(".right-text-dark-scroll").on( "click", function() {
 $("#scrolltarget").get(0).scrollIntoView();
});
$(document).ready(function() {
  var windowHeight = $(window).height();
	var windowWidth = $(window).width();


  if (windowHeight > windowWidth) {
    $("#moved-left-img").css("display", "none");
		$(".homepage-white").css("display", "none");
		$(".main-text-field").css("display", "none");
		$("p").css("text-align", "center");
		$("h3").css("text-align", "center");
		$("h1").css("text-align", "center");
		$("h2").css("text-align", "center");
		$("h4").css("text-align", "center");
		$("#phone-team").css("text-align", "center");
		$("#phone-team2").css("text-align", "center");
		$("#phone-team3").css("text-align", "center");
		$("#phone-team4").css("text-align", "center");
		$("#phone-team").removeClass("pr-5");
		$("#phone-team2").removeClass("pr-5");
		$("#phone-team3").removeClass("pr-5");
		$("#phone-team4").removeClass("pr-5");
		$("p").removeClass("pr-5");
		$(".bg-main").removeClass("bg-main").addClass("bg-main-mobile");
		$("button").removeClass("animatedlink").addClass("mobile-buttons");
		$(".button-on-dark").removeClass("mobile-buttons").addClass("mobile-buttons2");



}



});
