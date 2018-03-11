<?php
  include ('../db/database.php');

  if (isset($_POST['delete']) && isset($_POST['user_id'])){
    $query = "DELETE FROM user WHERE userid = {$_POST['user_id']}";
    $db->query($query);
  } else {
    echo "You ar't  delete a variable";
  }
?>
