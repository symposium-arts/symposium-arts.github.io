var sideMenu = document.getElementById("mobileNav");
var sideMenuButton = document.getElementById("side-menu-button");

sideMenuButton.onclick = function Sidebar (Sidebar) {

	if(sideMenu.className == "open") {
		sideMenu.className = "";
	} else{
		sideMenu.className = "open";
	}
	if(sideMenuButton.className == "checked") {
		sideMenuButton.className = "";
	} else{
		sideMenuButton.className = "checked";
	}
};
