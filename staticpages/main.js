$('.carousel').carousel({
    interval: 2000 
  }
  )
  
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open_window");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open_window");
    menuBtnChange();
  });


  function menuBtnChange() {
   if(sidebar.classList.contains("open_window")){
     closeBtn.classList.replace("menu", "new_menu");
   }else {
     closeBtn.classList.replace("new_menu","bx-menu");
   }}