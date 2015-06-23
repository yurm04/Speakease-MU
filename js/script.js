$( function() {

  //////////////////////
  // HEADER ANIMATION //
  //////////////////////

  $(window).load( function() {
    $("header h1").addClass("appear");
  });

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
      $("header h1").addClass("appear");
    } else {
      // Otherwise remove the class
      $(".logo-header").removeClass("smaller");
      $("nav").removeClass("smaller");
      $(".nav-logo img").removeClass("smaller");
    }
  });
  
} );