$( document ).ready(function() {   
	$(".dropdown-button").dropdown();
    
});

$(".button-collapse").sideNav();

$( "#calendar-btn" ).click(function() {
        $( ".calendar-div" ).show( "slide");
}); 

var items = $('post').length;
var itemsPerPage = 4;
$('.post').hide();
$('.post').slice(0, itemsPerPage).show();
$(function() {
    $('.news-pagination').pagination({
        items: items,
        itemsOnPage: itemsPerPage,
        onPageClick: function(pageNumber) {
            var showFrom = itemsPerPage * (pageNumber - 1);
            var showTo = showFrom
            itemsPerPage;
            $('.post').hide();
            $('.post').slice(showFrom, showTo).show();
        }
    });
});