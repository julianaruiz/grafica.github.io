document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 150
    });
});

const tamanio = document.querySelectorAll('.col');
if(window.innerWidth <= 1250){
    if(window.innerWidth <= 800){
        for (let i = 0; i < tamanio.length; i++) {
            tamanio[i].classList = tamanio[i].className.replace('s4' , 's12');
        };
    }
    else{
        for (let i = 0; i < tamanio.length; i++) {
            tamanio[i].classList = tamanio[i].className.replace('s4' , 's6');
        };
    }
}
else{
    for (let i = 0; i < tamanio.length; i++) {
        tamanio[i].classList = tamanio[i].className.replace('s12' , 's4');
    };
}
