$(document).ready(function(){
	$("#OpenModal").click(function(){
		$("#ChatModal").fadeToggle();
	});

	$("#CloseModal").click(function(){
		$("#ChatModal").fadeToggle();
		$("#FormModal")[0].reset();
	});
});