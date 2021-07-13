const btnMenu = document.getElementById('btn-menu'),
      enlaces = document.querySelector('.enlaces'),
      menu = document.querySelector('.menu'),
      logo = document.querySelector('.logo');

btnMenu.addEventListener('click', ()=> {
    enlaces.classList.toggle('activo');
});
//-----------------------Aun no funciona-------------------------
if(screen.width > 800){
    logo.src = "img/logo-dark.png";
}
else{
    if(screen.width <= 800){
        logo.src = "img/logo.png";
    }
}