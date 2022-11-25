<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <form action="sign.php" method="post">
                    <label>Name</label>
                    <input type="text" name="userName" id="">
                    <?php
                        if(isset($_GET['userName'])) {
                            $userName = $_GET['userName'];
                            echo "<p>Nazwa użytkownika: $userName</p>";
                        } else {
                            echo "<p>Nie podałeś nazwy użytkownika</p>";
                        }
                    ?>
                    <label>E-mail</label>
                    <input type="email" name="email" id="">
                    <?php
                        if(isset($_GET['email'])) {
                            $userName = $_GET['email'];
                            echo "<p>Nazwa użytkownika: $email</p>";
                        } else {
                            echo "<p>Nie podałeś nazwy email</p>";
                        }
                    ?>
                    <label>Password</label>
                    <input type="password" name="password" id="">
                    <?php
                        if(isset($_GET['password'])) {
                            $userName = $_GET['password'];
                            echo "<p>Nazwa użytkownika: $password</p>";
                        } else {
                            echo "<p>Nie podałeś nazwy hasla</p>";
                        }
                    ?>
                    <input type="submit" value="OK">
                <form>
            </ul>
        </nav>
        <?php



        ?>
    </header>
</body>
</html>