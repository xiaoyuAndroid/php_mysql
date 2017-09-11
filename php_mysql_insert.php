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

// insert into 表名( ) values ( )
mysql_query("insert into persons(Firstname,Lastname,Age) values('Peter', 'Griffin', '35')");
mysql_query("insert into persons(Firstname,Lastname,Age) values('Glenn', 'Quagmire', '33')");

// 关闭数据库连接
mysql_close($conn);