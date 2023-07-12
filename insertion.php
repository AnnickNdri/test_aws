<?php
include "connexion.php";

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['contact'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $sql = "INSERT INTO aws (nom, prenom, email, contact) VALUES ('$nom', '$prenom', '$email', '$contact')";

  if (mysqli_query($conn, $sql)) {
    echo "Enregistré avec succès";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
