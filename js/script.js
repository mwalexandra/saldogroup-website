 
 // Language select

 document.querySelector('.ru_lang-switcher').addEventListener('click', function() {

  let ruLang = document.getElementsByClassName("ru_lang");
  let enLang = document.getElementsByClassName("en_lang");

  for (i = 0; i < enLang.length; i++) {
    enLang[i].style.display = "none";
    ruLang[i].style.display = "block";
  }

});

  document.querySelector('.en_lang-switcher').addEventListener('click', function() {

    let ruLang = document.getElementsByClassName("ru_lang");
    let enLang = document.getElementsByClassName("en_lang");

    for (i = 0; i < ruLang.length; i++) {
      ruLang[i].style.display = "none";
      enLang[i].style.display = "block";
    }

});
  

// Burger    

    document.querySelector('.header_section__nav-btn').addEventListener('click', function() {
            document.querySelector('.header__burger_nav_container').classList.toggle('active')
    });

//    document.querySelector('.nav__form_search-btn').addEventListener('click', function() {
//            document.querySelector('.nav__form_input').classList.toggle('burger__search-active')
//    });    

//    document.querySelector('.header__burger__search-btn').addEventListener('click', function() {
//        document.querySelector('.header__burger__search-input').classList.toggle('header__burger__search-input-active')
//}); 


// Accordion
    new Accordion('.accordion__container-ru', {
        showMultiple: true
    });

    new Accordion('.accordion__container-en', {
      showMultiple: true
  });

// Button up
    let btnUp = document.querySelector('.up_btn')

        function magic() {
        if (window.pageYOffset > 20) {
            btnUp.style.opacity = '0.8'
        } else { btnUp.style.opacity = '0' }
        }

        btnUp.onclick = function () {
            window.scrollTo(0,0)
        }

    window.onscroll = magic;