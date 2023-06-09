<?php 

session_start();

?>

<h3>La password generata è:</h3>
<p><?php echo $_SESSION['email'] ?></p>

<a href="index.php">Cambia valori</a>
