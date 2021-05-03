
<?php
include "database.php";
 ?>

 <?php
foreach ($database as $disco => $value) {   ?>

<div class="container" style="display: flex; flex-direction: column; justify-content: space-between; align-items: space-between;">
  <img style="max-width: 200px;"src="<?= $value['poster'] ?>">
  <div class=""><?= $disco  ?></div>
  <div class=""><?= $value['title'] ?></div>
  <div class=""><?= $value['author'] ?></div>
  <div class=""><?= $value['year'] ?></div>
  <div class=""><?= $value['genre'] ?></div>
</div>
  <?php
}
  ?>
