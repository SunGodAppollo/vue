<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/11/10
 * Time: 15:01
 */
include ('../dbconfig.php');

header('Content-Type:application/json; charset=utf-8');

// 也可以添加所有的请求为 允许，当然不推荐这样做了、
header('Access-Control-Allow-Origin: *');

//
$returnArr=array(
    'salet'=>'error'
);

$addArr=array(
    'name'=>$_POST['name'],
    'time'=>$_POST['time']
);


$sql = "INSERT INTO user (name, time) VALUES ('{$addArr['name']}', '{$addArr['time']}')";



if ($dbLink->query($sql) === TRUE) {
    $returnArr['salet']='success';
} else {
    echo "Error: " . $sql . "<br>" . $dbLink->error;
}
echo (json_encode($returnArr));

$dbLink->close();
