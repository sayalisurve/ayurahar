const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');


navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    
});
