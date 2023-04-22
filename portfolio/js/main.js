var typed = new Typed(".typing", {
    strings: ["Front end Developer", "React JS Developer", "Web Designer"],
    loop: true,
    typeSpeed: 100,
    backSpeed: 50,
    backDelay: 1000,

})


// Navbar on scrolling
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.navbar').fadeIn('slow').css('display', 'flex');
    } else {
        $('.navbar').fadeOut('slow').css('display', 'none');
    }
});


 