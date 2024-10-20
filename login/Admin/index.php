<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman ADMIN</title>

</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .center-text {
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
    </style>
        <?php
    session_start();
    if($_SESSION['status'] != "login"){
        header("location:.../index.php?pesan=login_dulu");
    }
    ?>
</head>
<body>
    <div class="center-text">
        <h1>ADMIN</h1> <br>
    </div>
    <div>
        <a href="index.php">DASHBOARD</a> <br>
        <a href="logout.php">LOGOUT</a>
    </div>

</body>
</html>