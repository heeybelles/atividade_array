<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Atividade-Array</title>
</head>
<body>
 <center>
<h1> Alunos da Etec </h1></center>
    <table class="table table-striped">
   <thead>
      <tr> 
          <th scope="col">RM</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Série</th>
          <th scope="col">Média Final</th>
     </tr>
    </thead>


    
     <tbody>
<?php 
      $dados = array(
        array("01","  Eduarda Belles  " ,"17","2MD2","MB"),
        array("02","  Takeshi Bezerra  ","17","2MD2","MB"),
        array("03","  Yukio Utiyama  " ,"16","2MD2","MB")
      );

      foreach($dados as $linha){

        echo "<tr>";
        foreach($linha as $valor){
        echo "<td> $valor </td>";
      }
      echo "</tr>";
    }

?>
     </tbody>
</table> 

<style>
   h1{
    margin-top: 100px;
   }
    table{
        margin-top: 150px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>