let menuVisible = false;
//Funcion Ocultar o Mostrar Menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}
//ocultamos menu cuando seleccionamos opcion.
function seleccionar(){
    document.getElementById("nav").classList ="";
    menuVisible = false;
}