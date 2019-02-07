<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">

</head>


<body>
  <div>

    <?php
  
if (!isset($_SESSION['pozice'])) {
    $_SESSION['pozice'] = filter_input(INPUT_POST, 'pozice');
}



switch ($_SESSION['pozice']) {
  case 'student':
?>
    <img class="pics" src="img/school.png" />
    <br>
    <a href="reset.php">Vyjdi ze školy</a>

    <?php

    break;

    case 'zlodej':
    ?>
    <img class="pics" src="img/bank.png" />
    <br>
    <a href="reset.php">Vyjdi z banky</a>

    <?php

    break;

    case 'cizinec':
    ?>
    <img src="img/statue.png" class="pics" />
    <br>
    <a href="reset.php">Vyjdi z muzea</a>

    <?php

    break;
  
  default:

    ?>


    <form action="index.php" method="post">

      <div class="tooltip">
        <input type="image" src="img/building.gif" name="submit" >
        <span class="tooltiptext">Vstoupit do města</span>
      </div>

      <br><br>
      <select name="pozice">
        <option value="student">Student</option>
        <option value="zlodej">Zloděj</option>
        <option value="cizinec">Cizinec</option>
      </select>

    </form>

    <?php
    break;
 }
?>


</body>

</html>