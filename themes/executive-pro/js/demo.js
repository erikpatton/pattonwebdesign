// --------------------------
// Hello World
//
console.log('Hello world.\n');

// --------------------------
// Variables, arrays, functions
//
var bruins = ["Chara", "Bergeron", "Krejci"];
console.log(bruins);
function displayTeam(players) {
	console.log(players);
}
displayTeam(bruins);
for (var i in bruins) {
	console.log(bruins[i]);
}

// --------------------------
// Objects
//
var user = {
	name: "Zdeno Chara",
	uid: "zchara",
	home: "/h/zchara",
	uidNumber: 9535,
	shell: "/bin/bash",
	displayAttrs: function() {
		console.log(this);
	}
}
console.log(user);
console.log(user.name);


function isChara(uid) {
	if(user.uid = "zchara") {
		return true;
	}
	return false;
}

var status = isChara(user);
if(status) {
	console.log("Yep it's Chara.\n");
} else {
	console.log("Nope, not him.\n");
}

user.displayAttrs();




//// -----------------------------
//// DOM
////
//var doc = document;
//console.log(document);
//console.log(document.URL);
// 
// // Call back to make sure page fully loaded
// // Change the CSS class for a #development id
//function init() {     
//	var devString = document.getElementById("development");
//	console.log(devString);
//        devString.setAttribute("class", "entry-title");
//}
//window.onload = init;  // not calling init; just assigning function value
//   		       // to the window.onload property
//
//
////


// Jquery
//$(document.ready(function() {
//	$("#development").css({color: blue;});
//});
