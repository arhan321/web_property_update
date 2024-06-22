let menu = document.querySelector('.header .menu');

document.querySelector('#menu-btn').onclick = () =>{
   menu.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
   inputNumber.oninput = () =>{
      if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
   };
});

document.querySelectorAll('.faq .box-container .box h3').forEach(headings =>{
   headings.onclick = () =>{
      headings.parentElement.classList.toggle('active');
   }
});

gsap.from(".form-container", {
   x: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 2, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(".about .row .image", {
   x: -350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 2, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(".about .row .content", {
   x: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 2, // Durasi animasi
   ease: "power4.out", // Easing function
 });


 gsap.from(".steps .box-container .box ", {
   y: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 3, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(".reviews .box-container ", {
   y: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 3, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(" .dashboard .box-container ", {
   z: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 3, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(" .dashboard .heading ", {
   z: 350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 3, // Durasi animasi
   ease: "power4.out", // Easing function
 });

 gsap.from(" .contact .row ", {
   z: -350,
   opacity: 0,
   stagger: 0.3, // Jeda antara elemen
   duration: 4, // Durasi animasi
   ease: "power4.out", // Easing function
 });

