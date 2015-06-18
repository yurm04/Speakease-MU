$( function() {

  //////////////////////
  // HEADER ON SCROLL //
  //////////////////////

  // TODO - Can this be optimized for performance?
  $(window).scroll( function() {
    // If the height between the top of the window and current position is > 75
    if ($(window).scrollTop() > 75) {
      // Add class to the 3 elements
      $(".logo-header").addClass("smaller");
      $("nav").addClass("smaller");
      $(".nav-logo img").addClass("smaller");
    } else {
      // Otherwise remove the class
      $(".logo-header").removeClass("smaller");
      $("nav").removeClass("smaller");
      $(".nav-logo img").removeClass("smaller");
    }
  });


  //////////////////////
  // REVIEWS CAROUSEL //
  //////////////////////

  
} );