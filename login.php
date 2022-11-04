<?php
$pdo = new PDO('mysql:host=localhost;port=3307;dbname=injection-test;', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$name = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE username = '$name' AND password = '$password'";
var_dump($query);
$stet = $pdo->prepare($query);
$stet->execute();
$user = $stet->fetchAll(PDO::FETCH_ASSOC);
if (!$user) {
    header('Location: ./index.php');
}

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
    <div class="contaienr">
        <p>
            Welcome
        </p>
    </div>
</body>

</html>