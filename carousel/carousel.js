function carousel(){
    let slideleft = document.getElementById('slideleft');
    for (let i = 0; i < 10; i++) {
        slideleft.addEventListener('mouseover', function (){
            document.getElementById('registrar-carousel').style.transform = `translateX(-${i}vw)`;
        })
    }  
}
carousel();