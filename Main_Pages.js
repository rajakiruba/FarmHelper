
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
$('nav div li ').click(function(){
$('li a').removeClass("active");
$(this).addClass("active");
});
    });

  

      