<?php 

include "inc/function.php";
$categorie =getAllCategorie() ;

if(isset($_GET['id'])){
   $produit =  getproduitById($_GET['id']);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
<?php
 include"inc/header.php"
?>


<div class="row col-12 mt-4">
                <div class="card col-8 offset-2" style="width: 18rem;">
                <img src="img/<?php echo $produit['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit['nom'] ?> </h5>
                    <p class="card-text"> <?php echo $produit['description'] ?> </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $produit['prix'] ?> DT</li>
                    <li class="list-group-item"> <?php echo $produit['categorie'] ?> </li>
                    
                </ul>
              
                </div>

  


  


                <?php
  include "inc/footer.php";

  ?>
   
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>