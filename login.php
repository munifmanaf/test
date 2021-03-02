<?php
require_once 'includes.php';
session_start();
$check2 = (new Login())->check2();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>MyWeb Login</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
  <center><h1>Welcome to MyWeb</h1>
  <img src="include/logo.png" alt=""></center>
  
<section class="loginform cf">
    <form name="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
    
        <ul>
            <li>
                <label for="usermail">Email</label>
                <input type="username" name="username" placeholder="username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required></li>
          <li>
                <input type="submit" value="Login">
            </li>
        </ul>
    </form>
</section>
</body>
</html>