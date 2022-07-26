<?php
include "../../inc/function.php";
$conn = connect();

?>


<?php

foreach($categorie as $index=> $categories){ ?>

<!-- Modal Modifier Categorie -->
<div class="modal fade" id="editModal<?php echo $categories['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Categorie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="modifier.php" method="post">
        <div class="form-group">

        <input type="text" name="nom" class="form-control" value="<?php echo $categories['nom']; ?>" placeholder="Nom De Categorie ...">
        </div>
        <div class="form-group">

        <textarea  name="description" class="form-control" placeholder="Description De Categorie ..."><?php echo $categories['description']; ?> </textarea>
        </div>

<?php


}

?>    




<?php

foreach($categorie as $index=> $categories){ ?>

<!-- Modal Ajout Categorie -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Categorie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="post">
        <div class="form-group">

        <input type="text" name="nom" class="form-control" placeholder="Nom De Categorie ...">
        </div>
        <div class="form-group">

        <textarea  name="description" class="form-control" placeholder="Description De Categorie ..."></textarea>
        </div>

        
      </div>
      <?php


}

?>  

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
      </form>
    </div>
  </div>
</div>








