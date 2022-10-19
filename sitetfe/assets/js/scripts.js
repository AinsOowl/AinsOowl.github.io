const btnHaut = document.querySelector('.btn-haut')
const check = document.querySelector('#check')

console.log('btnHaut');


window.addEventListener('scroll', () => {

    const {scrollTop} = document.documentElement;

    const pourFleche = check.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + pourFleche).toFixed()) {
        btnHaut.classList.add('trans')
    }
    else{
        btnHaut.classList.remove('trans')
    }
})
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();


    if (scroll >= 10) {
        $(".menu-container").addClass("ombre");
    } else {
        $(".menu-container").removeClass("ombre");
    }
    
});



let open = document.querySelector('.open-close')
let fermer = document.querySelector('.btn-fermer')
let menu = document.querySelector('.menu-burger-container')
let btnMenu = document.querySelector('.menu-burger')
let reserver = document.querySelector('.stage-toggle')
let reservation = document.querySelector('.cont-form')
let btnStage = document.querySelector('.btn-stage')
let fondStage = document.querySelector('.fond-form')


open.addEventListener('click', function(){
    menu.classList.toggle('open')
    btnMenu.classList.toggle('close')
})


reserver.addEventListener('click', function(){
    reservation.classList.toggle('scale')
})

fondStage.addEventListener('click', function(){
    reservation.classList.toggle('scale')
})


