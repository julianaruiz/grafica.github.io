const flechaIzq = document.getElementById('flecha-izquierda'),
      flechaDer = document.getElementById('flecha-derecha'),
      carrusel = document.querySelector('.contenedor-carrusel');

flechaDer.addEventListener('click', () =>{
    carrusel.scrollLeft += carrusel.offsetWidth;
});

flechaIzq.addEventListener('click', () => {
    carrusel.scrollLeft -= carrusel.offsetWidth;
});