<?php
  require "header.php";
?>
<main>
  <h1>Signup</h1>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="user" placeholder="Username...">
    <input type="email" name="email" placeholder="Email...">
    <input type="password" name="pass" placeholder="Password...">
    <input type="password" name="pass-repeat" placeholder="Retype Password...">
    <button type="submit" name="signup-submit">Signup</button>
  </form>
</main>
<?php
  require "footer.php";
?>
