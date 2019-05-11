<?php
$id = $_POST['id'];
$name = $_POST['name'];
$pass = $_POST['password'];

require("db.php");

$sql = "INSERT INTO user (id, name, password, money) VALUES (?, ?, PASSWORD(?), 0)";

$cnt = query($con, $sql, [$id, $name, $pass]);

if($cnt == 0) {
    echo "회원가입이 실패했습니다.";
} else {
    msgAndGo("성공적으로 회원가입 되었습니다.", "/login.php");
}
