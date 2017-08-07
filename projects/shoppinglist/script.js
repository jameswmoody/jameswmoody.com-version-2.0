$(document).ready(function(){
	$(".add").click (function(){
		var text = $(".lsInput").val();
		var item = $('<div class="lsItem"><span></span></div>').text(text);

		item.on('dblclick', function(){
			$(this).fadeOut('fast');
		});
		item.on('click', function(){
			$(this).toggleClass('strike'); 
		});
	
	$('.lsInput').keyup(function(event){
		if(event.keyCode == 13) {
			event.preventDefault();
			$('.add').click();
			};
		});	

		if (text!=""){
			$(".lsArea").append(item);
			$(".lsInput").val("");
		}
		});

	$(function(){
    $('.lsArea').sortable({ axis: "y" });
    $('.lsItem').draggable();
})
});