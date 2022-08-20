<?php
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
$rconHost = getenv('RCON_HOST');
$rconPort = getenv('RCON_PORT');
$rconPassword = getenv('RCON_PASSWORD');
?>