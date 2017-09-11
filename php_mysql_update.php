<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/7
 * Time: 13:41
 */
/*
 * mysql_query() 函数
 *      此函数用于向 MySQL 连接发送查询或命令
 *
 */
// 创建数据库连接
$conn = mysql_connect("localhost","root","root");
if ( !$conn ) {
    die("Could not connect: ".mysql_error());
}
// 选库
mysql_select_db("my_db", $conn);

// update 表名 set 列1 = 值1 where expr
mysql_query("update Persons SET Age = '100' WHERE FirstName = 'Peter' AND LastName = 'Griffin'");

// 关闭数据库连接
mysql_close($conn);