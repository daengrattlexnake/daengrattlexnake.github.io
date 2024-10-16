window.addEventListener("scroll", function () {
    var navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

function hidePreloader() {
    setTimeout(function () {
        document.body.classList.add('loaded');
    }, 1500); 
}

const urlParams = new URLSearchParams(window.location.search);
const message = urlParams.get('message');

const resultDiv = document.getElementById('result');

resultDiv.textContent = message;

feather.replace();
