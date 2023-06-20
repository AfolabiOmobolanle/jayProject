<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/microsoft_logo_icon_170957.png" type="image/x-icon">
    <script src="./form.js" defer></script>
    <title>Sign in to your Microsoft account</title>
</head>
<body>
   <main class="main">
   <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form-Container'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
        ?>
    <div class="form-Container">
        <img src="./assets/microsoft_logo.svg" alt="" class="logo">
        <form action="form.php" method="post">
            <h2 class="signIn">
                Sign In
            </h2>
            <input type="email" name="username" id="email" required placeholder="Email">
            <h2 class="enterpassword">
                Enter Password
            </h2>
            <p id="err"></p>
            <input type="password" name="password" id="password" required placeholder="password" maxlength="8">
            <div class="switchContainer">
                <input type="checkbox" name="" id="toggle">
                <p style="cursor: pointer;" id="click">Show password</p>
            </div>
            <div class="btn-Container">
                <input type="submit" name="submit" value="Next" class="btn">
            </div>
        </form>

    </div>
    <div class="signIn-Options">
        <img src="./assets/key.svg" alt="" class="key">
        <p class="text">Sign-in Options</p>
    </div>
    <?php
    }
    ?>
   </main> 
  
</body>
</html>