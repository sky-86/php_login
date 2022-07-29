<?php
  require "header.php";
?>
<main>
  <?php
    if (isset($_SESSION['user_id'])) {
      echo "<p>Logged In</p>";
    } else {
      echo "<p>Logged Out</p>";
    }
  ?>
</main>
<?php
  require "footer.php";
?>
