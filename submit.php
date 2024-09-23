<?php
session_start();
$username = $_POST['username'];
$_SESSION['namauser'] = $username;
echo "Nama user anda adalah: $username<br><br>";
echo "<a href=hal1.php>Hal 1</a> <a href=hal2.php>Hal 2</a> <a
href=hal3.php>Hal 3</a>";
?>