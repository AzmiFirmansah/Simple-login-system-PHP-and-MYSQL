<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <h1>Membuat Form Login Dengan PHP</h1>
            <h3>Halaman Login Sederhana</h3>
            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Log In"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
