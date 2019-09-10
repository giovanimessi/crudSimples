<?php
require 'config.php';

$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false ){
  $id = addslashes($_GET['id']);


     $sql = "SELECT * FROM contatos  WHERE id = '$id'";
     $sql = $pdo->query($sql);

     if($sql->rowCount() > 0){

     	$dado = $sql->fetch();


     }

     if(isset($_POST['nome']) && empty($_POST['nome']) == false){
     	$nome = addslashes($_POST['nome']);
     	$email = addslashes($_POST['email']);

     	$sql = "UPDATE contatos SET nome = '$nome', email = '$email' where id = '$id'";
     	$sql = $pdo->query($sql);


     	   header("Location: index.php");
}

     }else{
     	header("Location: index.php");
     }





?>

<form method="POST">

 Nome:<br>
 <input type="text" name=" nome" value ="<?php echo $dado['nome']; ?> "/><br>
 Email:<br>
 <input type="text" name=" email" value="<?php echo $dado['email']; ?> "/><br>
 <input type="submit" value="Atualizar">



	
</form>