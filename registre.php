<?php 

session_start();

if (!isset($_SESSION['nom'])){ //ne rederiger pas a la page registre tanque  connecté
  header('location:profile.php');
  
  
  }



include "inc/function.php";
$categorie =getAllCategorie() ;

if(!empty($_POST)){

  ADDvisiteur($_POST);
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.23/sweetalert2.min.css" rel="stylesheet" >
  </head>
<body>
  <!--deb nav-->
<?php
 include"inc/header.php"
?>    

<!--fin nav-->
<div class="col-12" p-5>

    <h1 class="text-center">   S'enregistrer</h1>
    <form action="registre.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nom</label>
          <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            <input type="text" name="tel" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot De Passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
</div>

<!--footer-->
<?php
  include "inc/footer.php";

  ?>
   
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.23/sweetalert2.all.min.js"></script>

    <?php 
    if ($showregistrationalert == 1){


    print"<script> 
    Swal.fire({
    title: 'Success',
    text: 'compte creer avec succée',
    icon: 'success',
    confirmButtonText: 'OK',
    timer:3000
    })
    </script>";
    }
?>

</html>