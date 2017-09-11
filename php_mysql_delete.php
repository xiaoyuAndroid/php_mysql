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



// delete from 表名 where expr
mysql_query("delete from Persons where Firstname = 'peter' ");

// 关闭数据库连接
mysql_close($conn);