<?php
header('content-type:text/html;charset=utf-8');
$account = $_POST["account"];
$password = $_POST["password"];
$link = mysqli_connect("localhost","root","root","shop");
$sel = mysqli_query($link,"SELECT * FROM `user` WHERE `account`='$account' AND `password`='$password'");
$res = mysqli_fetch_assoc($sel);

if($res) {
    $arr = array("code"=>1,"data"=>$res);
    $json = json_encode($arr);
    echo $json;
}else {
    $arr = array("code"=>0);
    $json = json_encode($arr);
    echo $json;
}
?>