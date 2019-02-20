'use strict';

let searchBar = document.querySelector(".search");
let input = document.querySelector(".input");

input.addEventListener("click", searchFocus);
input.addEventListener("focusout", searchFocusOut);

function searchFocus() {
	searchBar.style.boxShadow = "0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08)";
}
function searchFocusOut() {
	searchBar.style.boxShadow = "0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08)";
}