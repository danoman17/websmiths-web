//Nav effect (scrollbar)

$(document).ready(function(){

    if($(window).scrollTop() > 10)
    {
        $('#nav').addClass('scl');
        $('#menu-responsive').css({
          top: '62px'
        });
    }
    else
    {
        $('#nav').removeClass('scl');
        $('#menu-responsive').css({
          top: '100px'
        });
    }
  
  
      $(window).scroll(function(){
          if($(window).scrollTop() > 10)
          {
              $('#nav').addClass('scl');
              $('#menu-responsive').css({
                top: '62px'
              });
          }
          else
          {
              $('#nav').removeClass('scl');
              $('#menu-responsive').css({
                top: '100px'
              });
          }
      });
  
  
      
  
});

  
//Funcion para activar el  botón del menu responsivo
$('#check').change(function() {
    
    if( $(this).is(":checked") ) {
  
      $('#menu-responsive').css({
          left: 0
      });
  
      $("body").addClass("no_scroll");
  
    } else {
      $('#menu-responsive').css({
        left: '-100%'
      });
  
      $("body").removeClass("no_scroll");
    }
  
});


  
  
  

  

if( $(window).width() > 800 ){
  
    //Menu navbar effects
    
      $(document).ready(function(){
        
          $('.der ul li a').each(function(index, elemento){
            $(this).css({
              'top' : '-100px'
            });
    
            $(this).animate({
              top :'0'
            }, 1500 + (index * 300));
          });
    
            
        $('nav .izq .logo').css({
          opacity : 0,
          marginTop: '100px'
        });
    
        $('nav .izq .logo').animate({
          opacity : 1,
          marginTop : '5px'
        }, 1500);
    
    
      });
    
    }


    

// scroll menu elements anclas


//declaramos llos tops de 
// var homePage = $('#inicio').offset().top,
// sobremi = $('#sobre-mi').offset().top,
// servicios = $('#servicios').offset().top,
// horarios = $('#horarios').offset().top,
// ubicacion = $('#ubicacion').offset().top,
// contacto = $('#contacto').offset().top;

// $('#btn-inicio').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (0)
// },800);
// });

// $('#btn-sobre-mi').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (sobremi-75)
// },800);
// });

// $('#btn-servicios').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (servicios-75)
// },800);
// });

// $('#btn-horarios').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (horarios-75)
// },800);
// });

// $('#btn-ubicacion').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (ubicacion-75)
// },800);
// });


// $('#btn-contacto').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (contacto-75)
// },800);
// });


// $('#btn-section-inicio').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (sobremi-75)
// },800);
// });


// //Responsive navbar Effects 

// $('#btn-inicio-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (0)
// },800);
// });

// $('#btn-sobre-mi-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (sobremi-75)
// },800);
// });

// $('#btn-servicios-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (servicios-75)
// },800);
// });

// $('#btn-horarios-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (horarios-75)
// },800);
// });

// $('#btn-ubicacion-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (ubicacion-75)
// },800);
// });


// $('#btn-contacto-alterado').on('click',function(e){
// e.preventDefault();
// $('html, body').animate({
//     scrollTop : (contacto-75)
// },800);
// });



/*Efectos de Carousel*/ 

window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},
		responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 450,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			}
		]
	});
});

    