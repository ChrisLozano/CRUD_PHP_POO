function limpiar(){
//alert("Ingresa tu nombre");
    document.form.reset();
    document.form.nombre.focus();
}
function validar(){
    var form = document.form;
    if (form.nombre.value == ""){
        alert("Ingresa tu nombre");
        form.nombre.value = "";
        form.nombre.focus();
        return false;
    }
     if (form.mensaje.value == ""){
        alert("Ingresa tu mensaje");
        form.mensaje.value = "";
        form.mensaje.focus();
        return false;
    }
    form.submit();
}

function cambiar_color(id, color){
    
    document.getElementById(id).style.backgroundColor = color;
}