<?php
session_start();
echo "Ini adalah halaman 1<br>";
echo "Nama user Anda adalah:
".$_SESSION['namauser']. "<br><br>";
echo "<a href=hal1.php>Hal 1</a> <a href=hal2.php>Hal 2</a> <a
href=hal3.php>Hal 3</a>";
?>