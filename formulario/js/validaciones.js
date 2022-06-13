$(document).ready(function () {
    //Propiedades de la librería jquery.rut.js
    $("#rutVotante").rut({
        formatOn: 'keyup',
        validateOn: 'change'
    });
    //Solo se permiten números en el campo RUT, el formato de RUT se realiza de
    //forma automática.
    $('#rutVotante').on('keydown keypress', function (e) {
        if (e.key.length === 1) {
            if ($(this).val().length < 12 && !isNaN(parseFloat(e.key))) {

                $(this).val($(this).val() + e.key);
            }
            return false;
        }
    });
    //Solo se permiten letras, mayúsculas y minúsculas, espacios y acentos
    //en el campo Nombre y apellido.

    $("#nombreVotante").keypress(function (tecla) {
        
        if ((tecla.charCode < 97 || tecla.charCode > 122)
            && (tecla.charCode < 65 || tecla.charCode > 90)
            && (tecla.charCode != 45)
            && (tecla.charCode != 241)
            && (tecla.charCode != 209)
            && (tecla.charCode != 32)
            && (tecla.charCode != 225)
            && (tecla.charCode != 233)
            && (tecla.charCode != 237)
            && (tecla.charCode != 243)
            && (tecla.charCode != 250)
            && (tecla.charCode != 193)
            && (tecla.charCode != 201)
            && (tecla.charCode != 205)
            && (tecla.charCode != 211)
            && (tecla.charCode != 218)
        )
            return false;
    });

    //Evitar autocompletado.
    $("#frmvotacion").attr('autocomplete', 'off');

    //Se valida que en el campo alias solo se puedan escribir letras y números.
    $("#aliasVotante").keypress(function (tecla){
        if((tecla.charCode > 31 && (tecla.charCode < 48 || tecla.charCode > 90) && (tecla.charCode < 97 || tecla.charCode > 122))
        )
        return false;
    })
});