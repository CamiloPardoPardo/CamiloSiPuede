window.onload = function(){
    var contenedor = document.getElementById('contenedor_carga');

    contenedor.style.display = 'none';
} 

function siguiente(){
    
    document.getElementById("portada1").style.display = "flex";
    document.getElementById("portada2").style.display = "none";

}
function anterior(){
    
    document.getElementById("portada1").style.display = "none";
    document.getElementById("portada2").style.display = "flex";
}
function historia(){
    document.getElementById("botonhistoria").style.display = "none";
    document.getElementById("mihistoria").style.display = "block";
}
function estudiar(){
    document.getElementById("botonestudiar").style.display = "none";
    document.getElementById("estudiar").style.display = "block";
}