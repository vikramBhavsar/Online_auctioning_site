
// returns the highestbid from the page
var highestbidlbl = parseInt(document.getElementById('highestbid').innerHTML,10);

// returns the your bid label   
var userbidlbl = document.getElementById('userbiddinglbl');
var userbidinp = document.getElementById('userbidinp');


var userbid = highestbidlbl;


function setValue(value){
    // alert(value);
    userbidlbl.innerHTML = value;
    userbidinp.value=userbid;
}

function showBidConfirm(){

}


setValue(userbid);

// Increase bid by 25k
document.getElementById("plus25").onclick = function(){
    userbid += 25000;
    setValue(userbid);
}

// decrease bid by 25k
document.getElementById("minus25").onclick = function(){
    if(userbid - 25000 >= highestbidlbl){
        userbid -= 25000;
    }
    setValue(userbid);
}

// Increase bid by 50k
document.getElementById("plus50").onclick = function(){
    userbid += 50000;
    setValue(userbid);
}

// decrease bid by 50k
document.getElementById("minus50").onclick = function(){
    if(userbid - 50000 >= highestbidlbl){
        userbid -= 50000;
    }
    setValue(userbid);
}

// Increase bid by 1L
document.getElementById("plus1l").onclick = function(){
    userbid += 100000;
    setValue(userbid);
}

// decrease bid by 1L
document.getElementById("minus1l").onclick = function(){
    if((userbid - 100000) >= highestbidlbl){
        userbid -= 100000;
    }
    setValue(userbid);
}