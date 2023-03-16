

$('.dropdown-container').mouseenter( function(e) {
    // $(this).children('.dropdown-list').css({'display': 'block'})
    gsap.to($(this).children('.dropdown-list'), {
        autoAlpha: 1, duration: 0.3,
    })
    gsap.to('.nav-background', {'height': 200+$(this).children('.dropdown-list').height()+'px', duration: 0.3});
})

$('.dropdown-container').mouseleave( function(e) {
    // $(this).children('.dropdown-list').css({'display': 'none'}) 
    gsap.to($(this).children('.dropdown-list'), {
        autoAlpha: 0, duration: 0.1
    })
    gsap.to('.nav-background', {'height': 200, duration: 0.5 });
})
