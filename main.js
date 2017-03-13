$(document).ready(function(){
    // $("#share-btn").click(function(){
    // 	    $(this).toggleClass("bg-show");
    // 	    // event.preventDefault();
    //     	$(".wrap-more-search").toggleClass("show");
    // });

    $("#share-btn").click(function(){
        console.log("entre");
         $(".share-button-more").toggleClass("top-div");
    });



$('#tab-content div').hide();
$('#tab-content div:first').show();

$('#nav li').click(function() {
	event.preventDefault();
    $('#nav li a').removeClass("active");
    $(this).find('a').addClass("active");
    $('#tab-content div').hide();

    var indexer = $(this).index(); //gets the current index of (this) which is #nav li
    $('#tab-content div:eq(' + indexer + ')').fadeIn(); //uses whatever index the link has to open the corresponding box 
});

});