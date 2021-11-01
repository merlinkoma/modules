let container = document.getElementById('container2');
let slideleft = document.getElementById('slideleft');
let slideright = document.getElementById('slideright');
slideleft.addEventListener("click", moveLeft);
slideright.addEventListener("click", moveRight);

function moveLeft(){
    console.log("coucou gauche");
    container.style.transform = `translateX(-50vw)`;
}

function moveRight(){
    console.log("coucou droite");
    container.style.transform = `translateX(50vw)`;
}

// for (let i = 0; i < 10; i++) {
//     slideleft.addEventListener('mouseover', function () {
//         document.getElementById('registrar-carousel').style.transform = `translateX(-${i}vw)`;
//     })
// }


let slideIndex = 0;

const showSlides = () => {
    const slides = document.getElementsByClassName("images-div1");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 3000);
};

showSlides();

