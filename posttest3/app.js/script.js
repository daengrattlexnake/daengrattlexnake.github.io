const hamburger = document.getElementById('hamburger');
const moon = document.getElementById('moon')
const navbarlist = document.getElementById('navbar-list');

hamburger.addEventListener('click', () => {
    navbarlist.style.display = navbarlist.style.display === 'flex'? 'none' : 'flex';
});
