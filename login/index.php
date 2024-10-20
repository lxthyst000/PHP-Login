<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Selamat Datang di Website University</h1>
    <h2>Silahkan Login</h2>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] =="gagal"){
            echo"<b>maaf, username dan password salah!</b> <br><br>";
        }elseif($_GET['pesan'] =="logout"){
            echo"<b>Terima kasih, Anda telah logout! </b> <br><br>";
        }elseif($_GET['pesan'] == "login_dulu"){
            echo"<b>Silahkan login untuk masuk ke dashboard! </b> <br><br>";
        }
    }
    ?>

    <form action="cek_login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required="required">

        <br><br>

        <label>Password</label>
        <input type="password" name="password" required="required">

        <br><br>

        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>
