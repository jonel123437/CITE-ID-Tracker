<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>idTracker | Login</title>
        <link rel="stylesheet" href="../assets/css/home.css">
    </head>
    <body>
        <?php
            require "../Config/_config.php";
            require "../Model/database.php";
        ?>
        <div class="container">
            <form action="" method="post">
                <h1 style="margin-bottom: 2rem;">LOGIN</h1>
                <div class="input_container">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="input_container">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="input_container">
                    <input type="submit" value="Login" style="background-color: aquamarine !important; width: 100%; cursor: pointer;">
                </div>
            </form>
        </div>
    </body>
    <script src="../assets/js/home.js"></script>
</html>