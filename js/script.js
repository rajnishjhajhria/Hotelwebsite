
// JavaScript validation to ensure the navigation links are correctly pointing to the respective pages
document.addEventListener('DOMContentLoaded', function () {
    const homeLink = document.getElementById('home-link');
    const aboutLink = document.getElementById('about-link');
    const roomsLink = document.getElementById('rooms-link');
    const contactLink = document.getElementById('contact-link');

    homeLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = './index.html';
    });

    aboutLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = './about.html';
    });

    roomsLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = './rooms.html';
    });

    contactLink.addEventListener('click', function (event) {
        event.preventDefault();
        window.location.href = './contact.html';
    });
});
