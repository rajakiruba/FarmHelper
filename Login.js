
function on(){
    document.getElementById("zoom").style.display="block";
                }
                function off(){
    document.getElementById("zoom").style.display="none";
                }
                

function myFun() {
var x = document.getElementById("Left_navbar");

var x1 = document.getElementsByClassName("navbar_Left")

if (x.className === "navbar_Left") {
x.className += " responsive";
console.log(x.className)
} else {
x.className = "navbar_Left";
}
} 
$(document).ready(function(){
$('div ul a').click(function(){
$('ul a').removeClass("button_hover");
$(this).addClass("button_hover");
});
});