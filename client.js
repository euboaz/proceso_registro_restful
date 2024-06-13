function registro_usuario () 
{
    let correo = document.getElementById("correo").value;
    let pass = document.getElementById("pass").value;
    var settings = {
        "url": "http://localhost/proceso_registro_restful/server/server.php?correo="+correo+"&pass="+pass,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) {});
}

