<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="refresh" content="3; URL=http://myweb/index.html">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php
$servername = "localhost";
$database = "iprogrammer";
$username = "root";
$password = "";
$database_table = "iprogrammer";

$name = $_POST['name'];
$name2 = $_POST['name2'];
$tel = $_POST['tel'];
$email = $_POST['email'];
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $search = mysql_query("SELECT `login` FROM `account` WHERE `login` = '".mysql_real_escape_string($_POST['login'])."'");
    if(mysql_num_rows($search) = 0)
    {
        
    } else {
        echo 'Такой уже есть';
    }
?>
<style>
    body {
        background: #151515;
        font-family: 'Montserrat', sans-serif;
    }
    .pp {
        margin-left: 40vw;
        font-size: 40px;
        font-weight: 700;
        color: white;
    }    
</style>
<p class="pp">спасибо</p>
</body>
</html>
