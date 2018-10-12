HTMLElement.prototype.isVisible = function() {
    const position = this.getClientRects()[0];
    return position.top >= 0 && position.top <= window.innerHeight;
}

const fade = document.querySelectorAll('article');

function handler() {
    for(const element of fade) {
        console.log(element);
        element.style.oppacity = element.isVisible() ? '0 !important' : '1 !important';
    }
}

if (window.addEventListener) {
    window.addEventListener('DOMContentLoaded', handler); 
    window.addEventListener('load', handler); 
    window.addEventListener('scroll', handler); 
    window.addEventListener('resize', handler); 
} else if (window.attachEvent)  {
    window.attachEvent('onDOMContentLoaded', handler);
    window.attachEvent('onload', handler);
    window.attachEvent('onscroll', handler);
    window.attachEvent('onresize', handler);
}