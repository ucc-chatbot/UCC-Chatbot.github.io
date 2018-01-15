$(document).ready(function(){
    
    $('#btnSubmit').click(function(){
        var newDiv = $('<div><h4><a>Some text</a></h4> </div>');
      //newDiv.style.background = "#000";
       $('body').append(newDiv);
    });

});


document.getElementsByClassName("tablink")[0].click();

function openTab(evt, tabNum) {

  var i, x, tablinks;

  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-white");
  }
  document.getElementById(tabNum).style.display = "block";
  evt.currentTarget.classList.add("w3-white");
}