<?php
if (isset($_POST["submit"])) {
  echo "
  <script>
    document.location.href = 'lihatdata.php';
  </script>
  ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<section class="login-card">
    <hgroup>
      <h1 class="login-title">Login</h1>
      <p class="login-description">Silakan login untuk melihat data review</p>
    </hgroup>

    <form action="" method="post" class="login-form-container">
      <div class="login-form-group">
        <label for="username" class="login-form-title">Username</label>
        <input
          type="text"
          placeholder="Username"
          name="username"
          id="username"
          class="login-form-input" />
      </div>

      <div class="login-form-group">
        <label for="password" class="login-form-title">Password</label>
        <input
          type="password"
          placeholder="Password"
          name="password"
          id="password"
          class="login-form-input" />
      </div>

      <button type="submit" name="submit" class="login-button">LOGIN</button>
    </form>
  </section>

  <script src="/scripts/script.js"></script>
</body>
</html>