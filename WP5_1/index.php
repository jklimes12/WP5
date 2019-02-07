<?php
$increment = filter_input(INPUT_GET, "increment");

if(!isset($increment)) {
    $increment = 1;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title   </title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>


    <?php
session_start ();

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
} 
else {
    $_SESSION['counter'] += $increment;
}



?>
    <div id="wrapper">

        <a href="index.php">
            <img src="img/cookie1.png" class="cookie" />
        </a>
        <a href="index.php?increment=10">
            <img src="img/cookie2.png" class="cookie" />
        </a>
        <a href="index.php?increment=50">
            <img src="img/cookie3.png" class="cookie" />
        </a>
        <br>

        <a href="reset.php">Resetuj counter!</a>
        <br>
        <span class="font-300per">
            <?= $_SESSION['counter']; ?></span>

    </div>

</body>

</html>