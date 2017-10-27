<?php
//Allow the config
    define('__CONFIG__',true);
    require_once "inc/config.php";

ForceLogin();
echo $_SESSION['user_id'] . " is your user id"; exit;

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
    Dachboard here you are signed in as user: <?php echo $_SESSION['user_id']; ?>
</div>

<?php
    require_once "inc/footer.php";
?>

</body>
</html>
