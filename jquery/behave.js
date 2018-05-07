//Animasi Pop Up pada saat user melihat detail produk


var isi = document.getElementsByClassName("pop-up");
var close = document.getElementsByClassName("rem");
var buy = document.getElementsByClassName("belibtn");

function show(target, target1){

	for(var i=0; i < isi.length; i++){
		isi[i].style.display = "none";
	}

	function tutup(){
		document.getElementById(target).style.display = "none";
		document.getElementById(target1).style.display = "none";
	}

	for(var i=0; i < close.length; i++){
		isi[i].addEventListener("click", tutup);
	}

	document.getElementById(target).style.display = "block";
	document.getElementById(target1).style.display = "block";
}