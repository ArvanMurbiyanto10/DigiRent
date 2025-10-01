import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Function to check if an element is in the viewport
const isElementInViewport = (el) => {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

// Function to handle scroll animations
const handleScrollAnimations = () => {
    const elements = document.querySelectorAll('.scroll-animate');
    elements.forEach((el) => {
        if (isElementInViewport(el)) {
            el.classList.add('is-visible');
        }
    });
};

// Add event listener for scroll
window.addEventListener('scroll', handleScrollAnimations);
// Initial check on page load
handleScrollAnimations();
