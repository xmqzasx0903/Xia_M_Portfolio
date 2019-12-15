window.onload = function () {
    var toggleIcon = document.querySelector('.phone-toggle-icon');
    var navBar = document.querySelector('.navbar');

    toggleIcon.addEventListener('click', function () {
        var classList = navBar.className.split(' ');
        var index = classList.indexOf('show');
        // class 'show' not exist
        if (index == -1) {
            navBar.className += ' show';
        } else {
            classList.splice(index, 1);
            navBar.className = classList.join(' ');
        }
    });
}