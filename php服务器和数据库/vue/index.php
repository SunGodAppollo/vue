<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/11/10
 * Time: 14:39
 */
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://192.168.1.117:8080');
// 也可以添加所有的请求为 允许，当然不推荐这样做了、
header('Access-Control-Allow-Origin: *');
include ('../dbconfig.php');



$sql = "SELECT * FROM user";
$result = $dbLink->query($sql);

$selectArr=array();
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $selectArr[]=$row;
    }
    //
    echo (json_encode($selectArr));
    //var_dump($selectArr);
} else {
    echo "0 结果";
}
$dbLink->close();