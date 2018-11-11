<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/11/10
 * Time: 14:37
 */
define('DBURL','127.0.0.1');
//define('DBURL','43.226.159.207');
define('DBNAME','vue');
define('DBUSER','root');
define('DBPASSWORD','root');

// 创建连接
$conn = new mysqli(DBURL, DBUSER, DBPASSWORD,DBNAME);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$dbLink=$conn;
