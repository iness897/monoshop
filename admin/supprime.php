<?php
require("../config/commandes.php");
$Produits=afficher();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>



<body>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<form method="post"> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>
    <input type="number" class="form-control" name="idproduit" required>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">Supprimer le produit</button>
</form>

  </div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <?php foreach ($Produits as $produit): ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?= $produit->image ?>">
              <h3><?= $produit->id ?></h3>
              <div class="card-body">
              </div>
            </div>
          </div>
  <?php endforeach; ?>


	</div>
</div>


</body>
</html>


<?php 

  if(isset($_POST['valider']))
  {
  	if(isset($_POST['idproduit']))
  	{
  		if(!empty($_POST['idproduit']))
  		{
  		
  			$idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

        try{
	        supprimer ($idproduit);
        }
        catch(Eception $e){
            $e->getMessage();
        }

        
  			

  		}
  	}
  }


?>


