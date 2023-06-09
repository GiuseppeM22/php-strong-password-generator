<?php 

include './function.php';

$mail = $_GET['mail'];

$email = generaStringaRandom($mail);

?>

<h3>La password generata è:</h3>
<p><?php echo $email ?></p>

<a href="index.php">Cambia valori</a>
