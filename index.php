<?php 

include './function.php';

$mail = $_GET['mail'];

$email = generaStringaRandom($mail);

session_start();


$_SESSION['email'] = $email;
header ('Location: ./printer.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generetor</title>
</head>
<body>

    <h2>Genera la tua password</h2>
    <form action="index.php" method="get">
        <input type="number" name="mail" id="mail" min="8" placeholder="inserisci un numero">
        <button type="submit">Invia</button>
    </form>

    <p><?php echo $email ?></p>




</body>
</html>