

var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'asesinos.png') 
}

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');



if(!localStorage.getItem('name')) {
  setUserName();
} 

myButton.onclick = function() {
  setUserName();
}