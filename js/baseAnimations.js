$(document).ready(function () {
    $(".dropdown-button").dropdown();
    $('.slider').slider('');
    $('.hideable').on('click', function () {
        $('.hideable').not('#2_6_2017').hide();
    });
});

$(".button-collapse").sideNav();
var height = $(window).height();
$('.bg-img').css('height', height);

/*function showhide(id) {
    var divid = document.getElementById(id);
    var divs = document.getElementsByClassName("hideable");
    for (var div in divs) {
        div.style.display = "none";
    }
    divid.style.display = "block";
    return false;
}*/

/*$( "#calendar-btn" ).click(function() {
        $( ".calendar-div" ).show( "slide");
        $(".events-wrapper").css('display: none');
}); */

/*$(".play-btn").click(function(){
    var source = $("#first-slide").src;
    $('.slides li').hide();
    //$(".slides").css('background-image', "url('img/blog/2015/regionals2015-0.jpg')");
    //style.backgroundImage = "url('img/blog/2015/regionals2015-0.jpg')";
    $(".slides li").first().show();
    $(".play-btn").hide();
    $(".pause-btn i ").show();
});

$(".pause-btn").click(function(){
    $('.slides').show();
    $(".pause-btn i ").hide();
    $(".play-btn").show();
});*/
