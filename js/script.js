document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('nav');
    const images = document.querySelectorAll('.image-grid img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = lightbox.querySelector('img');

    if (hamburger && nav) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }

    images.forEach(img => {
        img.addEventListener('click', () => {
            lightboxImg.src = img.getAttribute('data-full');
            lightbox.style.display = 'flex';
        });
    });

    lightbox.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });
});