const btn = document.getElementById('menuBtn');
const menu = document.getElementById('mobileMenu');
btn.addEventListener('click', () => {
    const open = menu.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
});