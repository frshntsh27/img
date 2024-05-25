<?php
require 'loginmodel.php';
require 'logincontroller.php';

// Database connection
$dsn = 'mysql:host=localhost;dbname=login';
$username = 'root';
$password = '';
$options = [];
$db = new PDO($dsn, $username, $password, $options);

$loginmodel = new LoginModel($db);
$logincontroller = new LoginController($loginmodel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $logincontroller->login($username, $password);
}
?>
