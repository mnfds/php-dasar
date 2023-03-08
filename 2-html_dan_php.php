<!-- Penulisan PHP Dalam HTML Dan Sebaliknya -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html dan php</title>
</head>
<body>
    <!-- <?php 
    $nama = "cenari";
    $edit = "nama"
    ?> -->
    <!-- PHP Dalam HTML -->
    <h1>Selamat Datang <?php echo $nama ?></h1>
    <input type="text" value="<?php echo $edit ?>">

   
    
</body>
</html>
 <!-- HTML Dalam PHP -->
<?php
        echo "<h1>helo</h1>";
?>
