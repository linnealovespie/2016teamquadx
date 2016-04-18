$(document).ready(function () {
    $(".dropdown-button").dropdown();
    $('.slider').slider('start');


    $("#19-oct img").hover(

        function ()

        {

            $(this).attr("src", "img/robot/gifs/19October_2churros.gif");

        },

        function ()

        {

            $(this).attr("src", "img/robot/gifs/19October_2churros.jpg");

        });
    $("#20-oct img").hover(

        function ()

        {

            $(this).attr("src", "img/robot/gifs/20October_3churros.gif");

        },

        function ()

        {

            $(this).attr("src", "img/robot/gifs/20October_3churros.jpg");

        });

});

$(".button-collapse").sideNav();

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
