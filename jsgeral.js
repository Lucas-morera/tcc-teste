$(document).ready(function ($) {

    $('#nave').hide(0900,function() {
        $('#nave').addClass('fixed-top');
    })


    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 900);

    });

    $('[name=celular]').mask('(00)90000-0000');

    window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
        var element = document.getElementById("nave");
       

    });

});

