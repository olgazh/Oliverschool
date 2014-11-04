
var x = 1;


function changeIcon(){
	if (x % 2 == 0) {
		document.getElementById("clickme").src = "../img/icon.jpg";
		x++;
	}
	else{
		document.getElementById("clickme").src = "../img/inco1.jpg";
		x++;
	}

	
}