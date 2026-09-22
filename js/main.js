// Main interactive scripts for Porsche landing page
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            console.log('Menu clicked');
            // Ready for mobile menu / drawer toggle logic
        });
    }
});
