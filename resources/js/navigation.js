function activeNav(routeLocation) {
    const navItems = document.querySelectorAll('.nav-router-link');
    for (let index = 0; index < navItems.length; index++) {
        navItems[index].classList.remove('active');
    }

    let currentNav = document.querySelectorAll("[to="+routeLocation+"]");
    for (let index = 0; index < navItems.length; index++) {
        currentNav[index].classList.add('active');
    }
}
