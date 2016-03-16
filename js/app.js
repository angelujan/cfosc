var distance = $('body').offset().top;

$(window).scroll(function (event) {
    $('.navbar .collapse').css('margin-top','0');
    $('.navbar .collapse').addClass('scroll');
    if ( $(this).scrollTop() == 0 ) {
        $('.navbar .collapse').css('margin-top','148px');
        $('.navbar .collapse').removeClass('scroll');
    }
});