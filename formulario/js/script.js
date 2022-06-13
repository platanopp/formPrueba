$(document).ready(function () {

	$('#btnvotar').click(function () {
		//Se declaran las variables para realizar las validaciones
		//al momento de presionar el botón Votar.

		//Validación formato de correo.
		var formatoCorreo = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		var validarCorreo = formatoCorreo.test($('#emailVotante').val().trim());

		var nombre = $("#nombreVotante").val();
		var alias = $("#aliasVotante").val();
		var rut = $("#rutVotante").val();
		var email = $("#emailVotante").val();
		var region = $("#regionVotante").val();
		var comuna = $("#comunaVotante").val();
		var candidato = $("#candidatoVotante").val();

		var datosVotante = $('#frmvotacion').serialize();
		//Validaciones si los campos están vacíos.
		if (nombre == "") {
			alert("Ingrese un nombre");
			return false;

		} else if (alias == "") {
			alert("Ingrese un alias");
			return false;

		} else if ($("#aliasVotante").val().length < 5) {
			alert("El alias debe tener como mínimo 5 caracteres");
			return false;

		} else if (rut == "") {
			alert("Ingrese un RUT");
			return false;

		} else if ($("#rutVotante").val().length < 10) {
			alert("RUT inválido");
			return false;

		} else if (email == "") {
			alert("Ingrese un email");
			return false;

		} else if (validarCorreo == false) {
			alert('La direccón de correo no es válida');
			return false;

		} else if (region == 0) {
			alert("Seleccione una región");
			return false;

		} else if (comuna == 0) {
			alert("Seleccione una comuna");
			return false;

		} else if (candidato == 0) {
			alert("Seleccione un candidato");
			return false;

		} else if ($('input[type=checkbox]:checked').length < 2) {
			alert('Debe seleccionar al menos 2 opciones');
			return false;

		}

		$.ajax({
			type: "POST",
			url: "insertDatos.php",
			data: datosVotante,
			success: function (respuesta) {
				if (respuesta == 1) {
					//Se limpian los campos del formulario.
					alert("Votación realizada");
					$("#nombreVotante").val("");
					$("#aliasVotante").val("");
					$("#rutVotante").val("");
					$("#emailVotante").val("");
					$("#regionVotante").val(0);
					$("#comunaVotante").val(0);
					$("#candidatoVotante").val(0);
					$(".chbx").prop("checked", false);
				} else {
					alert("Error en la votación,verifique los datos ingresados");
				}
			}
		})

		return false;
	});

	$.post('cbCandidato.php').done(function (respuesta) {

		$("#candidatoVotante").html(respuesta);

	})

	$.post('cbRegion.php').done(function (respuesta) {

		$("#regionVotante").html(respuesta);

	});

	$("#regionVotante").change(function () {

		var idRegion = $(this).val();
		$.post("cbComuna.php", {
			id_region: idRegion
		}).done(function (respuesta) {
			$("#comunaVotante").html(respuesta);
		}

		)
	})
});