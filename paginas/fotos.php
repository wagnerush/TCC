<?php

$caminho = NULL;
$descricao = NULL;

$slug = $_GET['slug'];

$sql = "SELECT * FROM fotos WHERE slug = $slug";

//$sql = "SELECT * FROM pagina WHERE slug = " . $_GET["slug"];


$query = mysqli_query($conexao, $sql);

?>

<div class="container">
  <div class="row">
    <div class="col-3">

      <div class="list-group">
        <a href="?pg=saibamais&slug=$slug" class="list-group-item list-group-item-action">História</a>
        <a href="?pg=rota&slug=$slug" class="list-group-item list-group-item-action">Como Chegar</a>
      </div>
      
    </div>

    	<div class="col-9">
    		
        <?php

          while($row = mysqli_fetch_assoc($query)){

            echo



          }
        ?>


 



    	</div>


  </div>
</div>