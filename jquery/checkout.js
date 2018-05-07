$(function(){
	$("#min").click(function(){
		$(".det").toggleClass("new");
		$(".glyphicon-plus").toggleClass("glyphicon-minus");
	});
});

$(function(){
	$("#min1").click(function(){
		$(".det1").toggleClass("new");
		$(".fa-plus").toggleClass("fa-minus");
	});
});

$(function(){
	$(".burg-menu").click(function(){
		$(".sidenav").css("display","block");
	});
});
$(function(){
	$(".out").click(function(){
		$(".sidenav").css("display","none");
	});
});