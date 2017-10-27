<?php
//Allow the config
    define('__CONFIG__',true);
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
    <?php
    echo "Hello world ";
    echo date("Y m d");
    ?>
    <p>
        <a href="login.php">Login</a><br>
        <a href="register.php">Register</a>
    </p>
</div>

<?php
    require_once "inc/footer.php";
?>

</body>
</html>
