jQuery(function( $ ){

	//$(document).ready(function() {
	// change the css for an item
	$("#development").css({"color": "blue"});

	// make a div clickable
	// function() is an anonymous function
//	$(".patton div").bind('click', function() {
//		alert("You rang?");
//	});

	// named function as event handlers
//	$(".patton div").bind('click', hideIt );
//	function hideIt() {
//		$(".patton div").hide();
//	}


	$("#btn1").bind('click', addIt );
	function addIt() {
		console.log("Adding");
		$(".patton div").addClass("added");
	}


	//}); // ready
});
