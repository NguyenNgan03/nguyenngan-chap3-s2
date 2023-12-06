<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    // Replace this with your actual password validation logic
    if ($password == "1234") {
        $_SESSION['authenticated'] = true;
    } else {
        $_SESSION['authenticated'] = false;
    }

    header('Location: index.php');
    exit();
}
?>