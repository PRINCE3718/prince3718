$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.navbar').fadeIn('slow').css('display', 'flex');
    } else {
        $('.navbar').fadeOut('slow').css('display', 'none');
    }
});