<?php 
include('header.php');
?>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<link href="css/style.css" rel="stylesheet">
<script src="js/chat.js"></script>
<style>
.modal-dialog {
    width: 400px;
    margin: 30px auto;	
}
</style>
<title>Sign Up</title>
</head>
    <body>
        <div class="center-elements">
            <h1>Regístrate aquí</h1>
            <form class="signup-form" method="post" action="./signup_logica.php">
            <label id="nombre">Nombre de usuario: <input class="signup-input" id="nombre" name="nombre"
            type="text" required /></label>
            <label id="password">Contraseña: <input class="signup-input" id="password" name="password"
            type="password" required /></label>
            </select>
            </label>
        <input id="registrar" name="Registrar" type="submit" class="signup-input" />
        <input id="limpiar" name="Limpiar" type="reset" class="signup-input" />
        </form>
        </div>
    </body>
</html>