const toggleMenu = document.querySelector(".toggle__menu");
const headerNav = document.querySelector(".header__nav");

toggleMenu.addEventListener("click", () =>{
    headerNav.classList.toggle("open");
    toggleMenu.classList.toggle("open");
});