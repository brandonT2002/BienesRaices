document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
})

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    const icono = document.querySelector('.menuIcono');

    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
        changeImage(icono, 'build/img/barras.svg');
    } else {
        navegacion.classList.add('mostrar');
        changeImage(icono, 'build/img/cerrar.svg');
    }
    // alternativa
    // navegacion.classList.toggle('mostrar')
}

function changeImage(element, newSrc) {
    element.classList.add('hidden');

    setTimeout(function() {
        element.src = newSrc;

        element.classList.remove('hidden');
    }, 400); // 500ms is the duration of the opacity transition
}