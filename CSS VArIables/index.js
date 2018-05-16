var root= document.querySelector(':root');
//getting the selector for the global css variables
console.log(root);

var rootStyles=getComputedStyle(root);//hooks into the css to get the css values for
// the 
console.log(rootStyles);
var red = rootStyles.getPropertyValue('--red');
var yellow =rootStyles.getPropertyValue('--yellow');
console.log('red: ',red);

//setting red to another color

root.style.setProperty('--red','green');

root.style.setProperty('--yellow','orange');