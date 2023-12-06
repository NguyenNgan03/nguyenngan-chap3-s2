<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>
<body>
    <form method="post" action="login.php">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" id="login_btn">Log in</button>
    </form>

    <?php
    // Display sensitive data if the user is authenticated
    session_start();
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
        echo '<div id="hidden">This is sensitive data visible only if the user is authenticated</div>';
    }
    ?>

</body>
</html>