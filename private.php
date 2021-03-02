<?php
    session_start();
    require_once 'includes.php';
    $check = (new Login())->check();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyWeb Main</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/styleshome.css">    
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="include/logo.png" alt="">
        </div>
<ul class="nav-area">
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
<div class="welcome-text">
<h1>Welcome 
<span>
<?php
    if(isset($_SESSION['username']))
    echo $_SESSION['username'];
?>
</span>, HAVE A GREAT DAY :)
</h1>

    </div>
</header>

</body>
</html>
