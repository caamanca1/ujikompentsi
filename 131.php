<?php
session_start();

if (isset($_SESSION['pross'])) {
    header('Location: pross.php');
}


?>