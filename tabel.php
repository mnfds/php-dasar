<?php 
    //koneksi database
    $db = mysqli_connect("localhost","root","","siswa");

    // ambil data dari database
    $user = mysqli_query($db, "SELECT * FROM user");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar akun</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
    </tr>

</table>
</body>
</html>