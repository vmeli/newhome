$(document).ready(function(){
    $("li.social__share .fa-share-alt").click(function(){
         $(this).closest( 'div.box' ).next('div.more-btn-share').addClass('modal-share-more');
	});
	$(".more-btn-share i.fa-times-circle-o").click(function(){
         $('.more-btn-share').removeClass('modal-share-more');
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