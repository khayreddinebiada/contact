<?php
  include ('../db/database.php');
  if (isset($_POST['infos'])){
    $query = "SELECT * FROM user;";
    $result = $db->getRow($query);
    if ($result) :
      while ($row = mysqli_fetch_assoc($result)) : ?>

      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div class="display-6">
          <h5 class="my-0"> <?= $row['username'] ?> <small class="text-muted"> <?= $row['email'] ?> </small> </h5>
          <hr class="mb-4">
          <p><?= $row['comment'] ?></p>

          <div class="btn pull-right">
            <button type="button" class="btn btn-danger  btn-users-delete" num-user='<?= $row['userid'] ?>'> Delete </button>
          </div>
        </div>
      </li>
    <?php endwhile;
    endif;
  }
  ?>
