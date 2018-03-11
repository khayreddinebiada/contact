<?php
  include ('../db/database.php');
  if (isset($_POST["insert"])){
    if (isset($_POST["user"]) && isset($_POST["email"]) && isset($_POST["comment"])){

      $user = $_POST["user"];
      $email = $_POST["email"];
      $comment = $_POST["comment"];

      $query = "INSERT INTO user (username, email, comment) VALUES ('$user', '$email', '$comment')";
      if ($db->insert($query)){
          echo "<div class='alert alert-success' role='alert'> Your Contact is successfully. </div>";
      } else {
        echo "<div class='alert alert-danger' role='alert'> They are an error. </div>";
      }
    } else {
      echo ("<div class='alert alert-danger' role='alert'> Your informations is incomplete </div>");
    }
  } else {
    echo ("<div class='alert alert-danger' role='alert'> They are an error. </div>");
  }



?>
