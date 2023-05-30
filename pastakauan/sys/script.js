 document.addEventListener('DOMContentLoaded', function() {
        var menuToggle = document.getElementById('menu-toggle');
        var menuIcon = document.querySelector('.menu-icon');

        menuToggle.addEventListener('change', function() {
            if (this.checked) {
                menuIcon.classList.add('active');
            } else {
                menuIcon.classList.remove('active');
            }
        });
    });



