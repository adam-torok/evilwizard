$('document').ready(function() {


    $(".modal-close").on('click',function(){
        $(".modal-window").hide();
    });

    $(".contact__form").on('submit',function(e){
        e.preventDefault();
        form_data = $(this).serialize();
        console.log(form_data);
        $.ajax({
            type: 'POST',
            url: "./php/sendmail.php",
            data: form_data
        })
          .done(function(){
              $(".modal-window").show();
              $(".modal-window").css("opacity",'1');
                $(".modal-window").css("visibility",'visible');
          })
          .fail(function(){
              alert("Some problem occured sending your email");
          });
    })
   

    var navbar = document.querySelector(".navbar")
    var ham = document.querySelector(".navbar__hamburger")
    ham.addEventListener("click", toggleHamburger)
    function toggleHamburger(){
        navbar.classList.toggle("showNav")
        ham.classList.toggle("showClose")
    }
    var menuLinks = document.querySelectorAll(".navbar__item")
    menuLinks.forEach( 
    function(menuLink) { 
        menuLink.addEventListener("click", toggleHamburger) 
    }
    )

    $('.loader').delay(2000).fadeOut('slow');

    let bg = document.getElementById('bg');
    let mid = document.getElementById('bg-mid');
    let front = document.getElementById('bg-front');
    let frontMid = document.getElementById('bg-front-mid');
    let logo = document.getElementById('landing-logo');

    window.addEventListener('scroll',function(){
        var value = window.scrollY;
        bg.style.top = value * 0.5 + 'px';
        mid.style.top = value * 0.3 + 'px';
        front.style.top = (value-50) * 0.6 + 'px';
        frontMid.style.top = value * 0.2 + 'px';
        logo.style.top = value * 1 + 'px';
    });
});

document.addEventListener('DOMContentLoaded',function(){
    new SmartPhoto(".js-smartPhoto2",{
        resizeStyle: 'fit'
    });
});