<?php
$account = $_POST['account'];
$email = $_POST['email'];
$password = $_POST['password'];
// Database connection
$conn = new mysqli('localhost', 'root', '1234', 'test');
if ($conn->connect_error) {
    die('Connectionn Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(account,email,password)
    value(?,?,?)");
    $stmt->bind_param("sss", $account, $email, $password);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
