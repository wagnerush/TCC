
<?php

$titulo = NULL;
$descricao = NULL;

$slug = $_GET['slug'];

$sql = "SELECT * FROM pagina WHERE slug = $slug";

//$sql = "SELECT * FROM pagina WHERE slug = " . $_GET["slug"];


$query = mysqli_query($conexao, $sql);

if($row = mysqli_fetch_assoc($query)){
    $titulo= $row["titulo"];
    $descricao = $row["descricao"];
    }

?>

<div class="container">
  <div class="row">
    <div class="col-3">

      <div class="list-group">
        <a href="?pg=fotos&slug=$slug" class="list-group-item list-group-item-action">Fotos</a>
        <a href="?pg=rota&slug=$slug" class="list-group-item list-group-item-action">Como Chegar</a>
      </div>
      
    </div>

    	<div class="col-9">
    		<?php
          echo htmlentities($titulo);

          echo htmlentities($descricao);

        ?>

    	</div>


  </div>
</div>