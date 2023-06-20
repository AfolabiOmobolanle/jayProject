<?php
session_start();

if(isset($_SESSION['admin']))
{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/microsoft_logo_icon_170957.png" type="image/x-icon">
    <title>Page</title>
</head>
<body>
    
</body>
</html>

<?php
}
else{
    echo'
                <script>
                alert("please login");
                window.location = "index.php";
                </script>';
}
?>