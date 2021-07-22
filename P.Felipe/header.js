$(document).ready(function(){
    $('.hamburguer').click(function(){
        $(this).toggleClass('active');
        $(".nav").toggleClass('active');
    })
});