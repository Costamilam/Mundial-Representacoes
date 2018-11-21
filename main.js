function fade() {
    for (
        const element of document.querySelectorAll(`
            #layout-padding > article:not(:nth-child(5)):not(#mvv),
            #layout-padding > article:nth-child(5) > section,
            #mvv > section
        `)
    ) {
        const boundingClientRect = element.getBoundingClientRect();

        if (!element.classList.contains('fadeInUp') && boundingClientRect.top >= 0 && boundingClientRect.top <= window.innerHeight) {
            element.classList.add('fadeInUp');
        }
    }
}

fade();

if (window.addEventListener) {
    window.addEventListener('scroll', fade);
    window.addEventListener('resize', fade);
} else if (window.attachEvent) {
    window.attachEvent('onscroll', fade);
    window.attachEvent('resize', fade);
} else {
    window.onscroll = fade;
    window.onresize = fade;
}

new Swiper('#carousel > .swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    slidesPerView: 3,
    freeMode: false,
    autoplay: true,
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: -50,
        depth: 300,
        modifier: 1,
        slideShadows: true
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    a11y: {
        enabled: true,
        prevSlideMessage: 'Slide anterior',
        nextSlideMessage: 'Próximo slide',
        firstSlideMessage: 'Primeiro slide',
        lastSlideMessage: 'Último slide',
        paginationBulletMessage: 'Ir para o slide {{index}}'
    }
});
