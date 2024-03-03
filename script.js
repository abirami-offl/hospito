const toggleButton = document.querySelector('.fa-bars');
const navLinks = document.querySelector('ul.nav-links');

toggleButton.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});
