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
const navLink1 = document.getElementById('link1');
const navLink2 = document.getElementById('link2');
const navLink3 = document.getElementById('link3');
const navLink4 = document.getElementById('link4');   

/*HIDDEN*/
navLink1.addEventListener('click', ()=>{
  nav.classList.toggle('show')
  toggle.classList.toggle('bx-x')
})

/*HIDDEN*/
navLink2.addEventListener('click', ()=>{
  nav.classList.toggle('show')
  toggle.classList.toggle('bx-x')
})

/*HIDDEN*/
navLink3.addEventListener('click', ()=>{
  nav.classList.toggle('show')
  toggle.classList.toggle('bx-x')
})

/*HIDDEN*/
navLink4.addEventListener('click', ()=>{
  nav.classList.toggle('show')
  toggle.classList.toggle('bx-x')
})