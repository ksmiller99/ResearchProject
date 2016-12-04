<?php
$servername = "sql104.byethost33.com";
$username = "b33_19265622";
$password = "MontclairCSAM1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=b33_19265622_DemoDb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully\n\n"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage()+"\n\n";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo('Hello PHP! from CafeDroid! And Git! It is Great');
        ?>
    </body>
</html>
