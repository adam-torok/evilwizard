$('document').ready(function() {
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