
$(".card").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}