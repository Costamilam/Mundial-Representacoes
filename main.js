let counter = 0;

const opacity = (element) => element.style.opacity = '1'

function fade() {
    if (counter === 15) {
        if (window.removeEventListener) {
            window.removeEventListener('scroll', fade);
            window.removeEventListener('resize', fade);
        } else if (window.detachEvent) {
            window.detachEvent('onscroll', fade);
            window.detachEvent('onresize', fade);
        } else {
            window.onscroll = null;
            window.onresize = null;
        }
    }

    for (
        const element of document.querySelectorAll(`
            #layout-padding > article:not(:nth-child(5)):not(#mvv),
            #layout-padding > article:nth-child(5) > section,
            #mvv > section
        `)
    ) {
        const boundingClientRect = element.getBoundingClientRect();

        if (!element.classList.contains('fadeInUp') && boundingClientRect.top >= 0 && boundingClientRect.top <= window.innerHeight - 50) {
            element.classList.add('fadeInUp');
            setTimeout(() => opacity(element), 1000);
            counter++;
        }
    }
}

fade();

if (window.addEventListener) {
    window.addEventListener('scroll', fade);
    window.addEventListener('resize', fade);
} else if (window.attachEvent) {
    window.attachEvent('onscroll', fade);
    window.attachEvent('onresize', fade);
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

setTimeout(() => {
    for (const element of document.querySelectorAll('.skype-button, body > a')) {
        element.style.opacity = '1';
    }
}, 4000);