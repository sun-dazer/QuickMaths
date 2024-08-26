//assigns 'animal' with dog or cat
function bunAssign()
{
    localStorage.setItem('animal', "bunny");
    
}
function catAssign()
{
    localStorage.setItem('animal', "cat");
}
function test()
{
    window.alert(localStorage.getItem('correct'));
}

//makes the button to quiz accessible once dog or cat button is pressed
function access()
{
    document.getElementById("begin").disabled = false;
}


//highlights the cat button when clicked
function catHighlight()
{
    document.getElementById("bunny").style.backgroundColor="white";
    document.getElementById("bunny").style.color="#002d52";
    document.getElementById("cat").style.backgroundColor="#002d52";
    document.getElementById("cat").style.color="white";
}
//highlights the dog button when clicked
function bunHighlight()
{
    document.getElementById("cat").style.backgroundColor="white";
    document.getElementById("cat").style.color="#002d52";
    document.getElementById("bunny").style.backgroundColor="#002d52";
    document.getElementById("bunny").style.color="white";
}


//event listeners
document.getElementById("bunny").addEventListener("click", access)
document.getElementById("bunny").addEventListener("click", bunHighlight)
document.getElementById("cat").addEventListener("click", access)
document.getElementById("cat").addEventListener("click", catHighlight)
document.getElementById("bunny").addEventListener("click", bunAssign)
document.getElementById("cat").addEventListener("click", catAssign)









