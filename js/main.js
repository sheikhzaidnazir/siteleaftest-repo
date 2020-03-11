if ($(window).width() > 767) {
  $(".nav-item").hover(
      function () {
        $(this).addClass("show");
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
        $(this).find('.dropdown-menu').first().addClass("show animated fadeIn");
    
      },
      function () {
        $(this).removeClass("show");
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
        $(this).find('.dropdown-menu').first().removeClass("show animated fadeIn");
      }
      
  );
};
// // Change image for header
 $("#page_banner_white_header  #door3Logo").attr("src", "/images/door3-logo-blue.svg");

// // Change image for sticky header
 $(".sticky-header  #door3Logo").attr("src", "/images/door3-logo-blue.svg");
 if ($(window).width() <= 767) {
  $(".nav-item").addClass('show');
  $(".nav-item  .dropdown-toggle").removeAttr("href");
  $(".dropdown-menu").addClass('show');
  
 }


// /*sticky header*/

$(window).scroll(function() {
      if ($(this).scrollTop() > 40) {
      var dataHidden = $('header').attr('data-hidden');
      

          if (dataHidden == 'true') {

          } else {
              /* $('#header').css('margin-top', '214px');*/
              $('header').addClass("sticky-header").hide();
              $('.sticky-header').slideDown('slow');
              $('header').attr('data-hidden', true);
              $(".sticky-header  #door3Logo").attr("src", "/images/door3-logo-blue.svg");
              

          }
    } 
    else{
      //$('#header').removeClass('sticky-header');
      $('header').removeClass("sticky-header").css('display', 'block');
      $('header').attr('data-hidden', false);
      $("header  #door3Logo").attr("src", "/images/door3-logo.svg");
      $("#page_banner_white_header  #door3Logo").attr("src", "/images/door3-logo-blue.svg");
      if ($(window).width() <=767){
        $("#page_banner_white_header header  #door3Logo").attr("src", "/images/door3-logo.svg");
      }

    }
});


//
// // Change full width for mobile
if ($(window).width() <= 567) {
  $("#case_study .col").addClass("p-0");
  $("#our_work .col").addClass("p-0");
}
// // Page banner color change for mobile
if ($(window).width() <=767){
  $("#page_banner_white_header header  #door3Logo").attr("src", "/images/door3-logo.svg");
}
