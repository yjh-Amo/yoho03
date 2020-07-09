<?php
header('content-type:text/html;charset=utf-8');
$username = $_GET["username"];
$account = $_GET["account"];
$password = $_GET["password"];
$link = mysqli_connect("localhost","root","root","shop");
$sel = mysqli_query($link,"SELECT * FROM `user` WHERE `username`='$username' AND `account`='$account' AND `password`='$password'");
$res = mysqli_fetch_assoc($sel);
if($res) {
    $arr = array("code"=>0);
    $json = json_encode($arr);
    echo $json;
}else {
    $inster = mysqli_query($link,"INSERT INTO `user` (`username`,`account`,`password`) VALUES ('$username','$account','$password')");
    $arr = array("code"=>1);
    $json = json_encode($arr);
    echo $json;

}

?>