/*=======Â¬===========   esse codigo vai mostra o meno que esta oculto com display none no despositivo ===========*/

const menuIcon = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('bx-x');   /** a que e chama , para aparecer o x no menu */
    navbar.classList.toggle('show');    /** chama o menu */
});



