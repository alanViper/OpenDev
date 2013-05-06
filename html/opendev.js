window.onscroll = function(){
	go_top = document.getElementById("go_top");
	scrollY = window.pageYOffset;
	if(scrollY > 142)
		go_top.style.display = "block";
	else
		go_top.style.display = "none";
}