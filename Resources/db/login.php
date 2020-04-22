<?php include '../navbar.php'; ?>

<!DOCTYPE HTML>

<head>
    <link rel="stylesheet" href="../style/style3.css">
    <title>Profile->Login</title>
</head>

<body>
    <div class="white">
        <h1>Login please</h1>
        <br><br>
        <form action="login.php" method="get">
            <label>username:</label><br>
            <input type="text" name="username" /><br>
            <label>password:</label><br>
            <input type="password" name="password" /><br>
            <input type="submit" value="login" />
        </form>
        <?php
        require_once 'db_connection.php';
        function login()
        {
            if (isset($_GET) && count($_GET) >= 2) {
                if (loginUser((string) $_GET['username'], (string) $_GET['password'])) {
                    header("Location: " . URL . "/Resources/profile/profile.php");
                }
            } else {
                echo "please input username and password";
            }
        }
        login();

        ?>

        <br><br>
        <p>Would you like to <a href="register.php">register</a> instead?</p>
    </div>
</body>