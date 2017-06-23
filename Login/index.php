<?php

session_start();
if (!isset($_SESSION['esta_logado']) OR !$_SESSION['esta_logado'] == true){

    //Usuário não logado
    header('Location: login.php');

}

?>

<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="https://vignette3.wikia.nocookie.net/southpark/images/9/9e/Eric_cartman.png/revision/latest?cb=20161207153635" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>