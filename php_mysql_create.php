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

//每个表都应有一个主键字段。
//  主键用于对表中的行进行唯一标识。每个主键值在表中必须是唯一的。
//  此外，主键字段不能为空，这是由于数据库引擎需要一个值来对记录进行定位。
//  主键字段永远要被编入索引。这条规则没有例外。
//  你必须对主键字段进行索引，这样数据库引擎才能快速定位给予该键值的行。



$conn = mysql_connect("localhost","root","root");
if ( !$conn ) {
    die("Could not connect: ".mysql_error());
}
//var_dump(mysql_query("CREATE DATABASE my_db",$conn) );
// 创建数据库
if (mysql_query("CREATE DATABASE my_db",$conn)) {
    echo "Database created".'<br>';
}else {
    echo "Error creating database: " . mysql_error();
}
// 在 my_db 中创建 table
// 在创建表之前，必须首先选择数据库。通过 mysql_select_db() 函数选取数据库
/*mysql_select_db("my_db", $conn);
$sql = "CREATE TABLE Persons(
Firstname VARCHAR (15),
Lastname VARCHAR (15),
Age int)";*/

//下面的例子把 personID
//  字段设置为主键字段。
//  主键字段通常是 ID 号，且通常使用 AUTO_INCREMENT 设置。
//  AUTO_INCREMENT 会在新记录被添加时逐一增加该字段的值。
//  要确保主键字段不为空，我们必须向该字段添加 NOT NULL 设置。

mysql_select_db("my_db", $conn);
$sql = "CREATE TABLE Persons(
  personID int NOT NULL AUTO_INCREMENT,PRIMARY KEY(personID),
  Firstname VARCHAR (15),
  Lastname VARCHAR (15),
  Age int)";

mysql_query($sql,$conn);
mysql_close($conn);