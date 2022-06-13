<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script src="../js/jquery.rut.js"></script>
    <script type="text/javascript" src="../js/validaciones.js"></script>
</head>
<body>
    <div id="form">
        <form id="frmvotacion" method="POST">
            <fieldset>
                <label>Nombre y apellido </label>
                <input placeholder="INGRESE NOMBRE Y APELLIDO" class="campos" type="text" name="nombre" id="nombreVotante">
                <br>
                <label>Alias </label>
                <input placeholder="INGRESE ALIAS" class="campos" type="text" name="alias" id="aliasVotante">
                <br>
                <label>RUT </label>
                <input placeholder="INGRESE RUT" class="campos" type="text" name="rut" id="rutVotante">
                <br>
                <label>Email </label>
                <input placeholder="INGRESE EMAIL" class="campos" type="text" name="email" id="emailVotante">
                <br>
                <label>Región </label>
                <select name="regionVotante" id="regionVotante">
                    <option value="0">SELECCIONE UNA REGIÓN </option>
                </select>
                <br>
                <label>Comuna </label>
                <select  name="comunaVotante" id="comunaVotante">
                    <option value="0">SELECCIONE LA COMUNA</option>
                </select> 
                <br>
                <label>Candidato </label>
                <select  name="candidato" id="candidatoVotante"></select>

                <div id="checkboxes">
                    <div class="title-div">
                        <label class="label-title">¿Cómo se enteró de nosotros? </label>
                    </div>
                    <input type="checkbox" value="web" id="web" class="chbx" name="opcion[]" /> 
                    <label class="checkbox-option" >Web</label>
                    <input type="checkbox" value="tv" id="tv" class="chbx" name="opcion[]" />
                    <label class="checkbox-option">TV</label>
                    <input type="checkbox" value="redsocial" id="redsocial" class="chbx" name="opcion[]" />
                    <label class="checkbox-option">Redes sociales</label>
                    <input type="checkbox" value="amigo" id="amigo" class="chbx" name="opcion[]" />
                    <label class="checkbox-option">Amigo</label>
                </div>
                <br>
                <button id="btnvotar">Votar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>