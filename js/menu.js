$(document).ready(menu);

var contador = 1;

function menu() {
var menu = $('nav');

    $('.menu-op').click(function() {
        if (contador == 1) {
            menu.slideDown();
            contador = 0;            
            
        } else {
            contador = 1;
            menu.slideUp();
        }
    });

    despliega();    

}

function despliega(){
   $(window).scroll(function(){

      if ( $(this).scrollTop() > 150 ) {

                $('.menu-op').css({
                   position: 'fixed',
                   top: '2%'
                }).fadeIn(3000);


      } else{

          $('.menu-op').css({
                   top: '10%' 
                }).fadeIn(3000);
      }
    });
}
