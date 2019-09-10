<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

       $sql = "INSERT INTO contatos SET nome = '$nome', email = '$email' ";
       $sql = $pdo->query($sql);

       header("Location: index.php");
 
}

?>

<form method="POST">
	Nome:<input type="text" name="nome"/><br><br>
	E-mail:<input type="text" name="email"/><br><br>
	<input type="submit" value="Novo"/>
	<a href="index.php">Volta</a>
	



</form>