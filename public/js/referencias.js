var control=["/acercade","/personajes","/beneficios","/contacto", "/renderizarAPI"];
var logeado = true;
window.onload=init;
var secciones = [];
function init()
{
    // alert(window.location.pathname);
    asignarVariables();
    asignarRutas();
    if(window.location.pathname=="/personajes")
    {
        rotacion();
    }
    if( window.location.pathname=="/")
    {
        logeado=false;
        logeo();       //Se comentó la funcion logueo por que el md5 no funciona en githubpages ya que no soporta php, para el funcionamiento correcto del logeo colocar la variable logueo de la linea 15 en false y quite el comentario en esta linea
    }
    if(window.location.pathname=="/renderizarAPI")
    {
        alert("Esta API recibe 25 peticiones por hora");
        capturarDatos();
    }
    
}

function asignarVariables()
{
    secciones["/"] = document.getElementById("/");
    secciones["/acercade"] = document.getElementById("/acercade");
    secciones["/personajes"] = document.getElementById("/personajes");
    secciones["/beneficios"] = document.getElementById("/beneficios");
    secciones["/contacto"] = document.getElementById("/contacto");
    secciones["/renderizarAPI"] = document.getElementById("/renderizarAPI");
}

function asignarRutas()
{
    for (var seccion in secciones) 
    {
        secciones[seccion].addEventListener("click",navegacion);    
    }
}

function controlAcceso(indice){
    for (var i in control)
    {
        if (control[i]==indice) {
            return true;
        }
    }
    return false;
}

function navegacion(event) 
{
    var id = event.target.id;
    console.log("Control Acceso: "+controlAcceso(id));
    console.log("logged: "+logeado);
    if (controlAcceso(id) && logeado || id == "/"){
        location.href = id;
    }
    else{
        alert("No estas logueado");
    }
}