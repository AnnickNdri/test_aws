<?php
include "insertion.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
        <h1>    Formulaire d'inscription</h1>
            
    <form action="" method="post" style="background:#0F056B">
        <div class="mb-3">
    <label for="nom" class="form-label" style="color:white">Nom</label>
    <input type="text" class="form-control" name="nom" >
  </div><br><br>
  <div class="mb-3">
    <label for="prenom" class="form-label" style="color:white">Prénoms</label>
    <input type="text" class="form-control" name="prenom">
  </div><br><br>
  <div class="mb-3">
    <label for="email" class="form-label" style="color:white">Adresse Email</label>
    <input type="email" class="form-control" name="email">
  </div><br><br>
  <div class="mb-3">
    <label for="contact" class="form-label" style="color:white">Contact</label>
    <input type="text" class="form-control" name="contact">
  </div><br><br>
 
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>