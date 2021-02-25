var divs = 4;
var i = 2;

while(i <= divs){

    var x = document.getElementById(i);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

    i ++;
}

function mostra_oculta(div){

    i = 1;    
    while(i <= divs){
        var z = document.getElementById(i);
        z.style.display = "none";
        i ++;
    }

    var x = document.getElementById(div);
    x.style.display = "block";   
    
};