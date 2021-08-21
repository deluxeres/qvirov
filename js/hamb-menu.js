let hamb = document.querySelector(".hamb");
let menuLink = document.querySelector(".menu-link");

hamb.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamb.classList.toggle("active");
    menuLink.classList.toggle("active");
}