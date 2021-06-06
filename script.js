$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Confianza y Teletrabajo", "Acompañamiento, desempeño y Desarrollo","Ser Parte de la Cultura del Servicio", "Productividad Organizacional", "Liderazgo Resiliente", "Selección de Personal"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });


    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });

    //almacenar slider en una variable
    var slider = $('#slider');
    //almacenar botones
    var siguiente = $('#btn-next');
    var anterior = $('#btn-prev');

    //mover ultima imagen al primer lugar
    $('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
    //mostrar la primera imagen con un margen de -100%
    slider.css('margin-left', '-'+100+'%');

    function moverD() {
        slider.animate({
            marginLeft:'-'+200+'%'
        } ,700, function(){
            $('#slider .slider__section:first').insertAfter('#slider .slider__section:last');
            slider.css('margin-left', '-'+100+'%');
        });
    }

    function moverI() {
        slider.animate({
            marginLeft:0
        } ,700, function(){
            $('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
            slider.css('margin-left', '-'+100+'%');
        });
    }

    function autoplay() {
        interval = setInterval(function(){
            moverD();
        }, 5000);
    }
    siguiente.on('click',function() {
        moverD();
        clearInterval(interval);
        autoplay();
    });

    anterior.on('click',function() {
        moverI();
        clearInterval(interval);
        autoplay();
    });


    autoplay();

});
