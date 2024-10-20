<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:Admin/index.php");
}elseif($username == "mahasiswa" && $password == "mahasiswa123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    header("location:Mahasiswa/index.php");
}elseif($username == "dosen" && $password == "dosen123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:Dosen/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
