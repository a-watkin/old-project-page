$.noConflict();
jQuery(document).ready(function($){
  // $('nav a').on('click', function(){
  //   console.log($('nav a'));
  //     if($('navbar-toggle').css('display') !='none'){
  //         $('navbar-toggle').trigger( "click" );
  //     }
  // });

  // $("#danger-button").on("click", function() {
  //   // alert("congrats you did it");
  //
  //
  //     $('.navbar-toggler').click();
  //
  // });

  $('nav a').on('click', function() {
    var blah = $(this).attr("id");

    if (blah == 'navbarDropdown') {
      console.log('clicked');
    } else {
      $('.navbar-toggler').click();
    }
  });

});
