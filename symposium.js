var sideMenu = document.getElementById("mobileNav");
var sideMenuButton = document.getElementById("side-menu-button");
var prlx_ly_1 =	document.getElementById('homeImgCont');

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


function Parallax (Parallax){
	prlx_ly_1.style.top = -(window.pageYOffset / 3.5)+'px';
}
window.addEventListener("scroll", Parallax, false);