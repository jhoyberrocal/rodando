$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#!"]')
    .not('[href="#0"]')
    .click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {

            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                event.preventDefault();
                window.scrollTo(0, target.offset().top - 100);
            }
        }
    });

$(document).ready(() => {
    const $carousel = $('.carousel');
    $('.sidenav').sidenav();

    $carousel.carousel();

    $('.materialboxed').materialbox();

    $('.modal').modal();

    autoplay(false);

    function autoplay(flag) {
        if (flag) {
            $carousel.carousel('next');
        }
        setTimeout(() => autoplay(true), 4000);
    }
});
