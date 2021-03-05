/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navId)=>{
  const toggle = document.getElementById(toggleId),
  nav = document.getElementById(navId)

  if(toggle && nav){
    toggle.addEventListener('click', ()=>{
      nav.classList.toggle('show')
      toggle.classList.toggle('bx-x')
    })
  }
}
showMenu('header-toggle','nav-menu')


/*===== REMOVE MENU =====*/

const toggle = document.getElementById('header-toggle');
const nav = document.getElementById('nav-menu');
const navLink = document.querySelectorAll('.nav__link');

function linkAction(){
  /*Remove menu mobile*/
  nav.classList.toggle('show')
  toggle.classList.toggle('bx-x')
}
navLink.forEach(n => n.addEventListener('click', linkAction));