<?php
require 'config.php';

?>

<table width="100%" border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>


    </tr>
    <?php

  $sql ="SELECT * FROM contatos";
  $sql = $pdo->query($sql);

   if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $teste){
        echo "<tr>";
        echo "<th>".$teste['nome']."</th>";
        echo "<th>".$teste['email']."</th>";
        echo '<th><a href="editar.php?id='.$teste['id'].'">[Editar]  -- & -- 
         <a href="excluir.php?id='.$teste['id'].'">[Excluir]</a></th>';

        echo "</tr>";

    }

   }


    ?>
    
</table>
<a href="adicionar.php">[Adicionar]</a>
