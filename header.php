<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="This is a description">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body>
  <header>
    <nav>
      <a href="#">
        <img src="img/android-chrome-512x512.png" height="64" width="64" alt="logo">
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div>
        <?php
          if (isset($_SESSION['user_id'])) {
            echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                  </form>';
          } else {
            echo '
              <form action="includes/login.inc.php" method="post">
                <input type="text" name="user" placeholder="Username/Email...">
                <input type="password" name="pass" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Signup</a>';
          }
        ?>
      </div>
    </nav>
  </header>
</body>
