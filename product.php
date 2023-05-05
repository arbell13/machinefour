<?php
session_start();
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}else{
    header('Location: index.php');
}
?>

<h2 style="text-align: end"> Welcome!, <?= $name ?></h2>
<h1> Product Page </h1>
<a href="profile.php"> Profile</a>
<a href="log.php"> Log Out</a>