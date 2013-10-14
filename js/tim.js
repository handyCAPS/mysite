function timInit() {
	var screenW = window.innerWidth;
	var screenH = window.innerHeight;
	var menu = document.getElementById('topNav');
	var menuButton = document.getElementById('toggleMenu');
	var toggle ;

	$.localScroll();

	if (menu.style.display == "block") {
		menuButton.onclick = function() {
			menu.style.display = "none";
			toggle = 1;
		}
	} 
	else {
		menuButton.onclick = function() {
			menu.style.display = "block";
			toggle = 0;
			console.log(toggle);
		}
	}

};