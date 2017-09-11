<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/11
 * Time: 19:12
 */

/*
 * insert into 表名( ) values ( )
 *      列与值一一对应，
 * delete from 表名 where expr
 *      expr必填，否则删除表中所有行
 *      delete 与 insert 的最小操作单位都是一行
 *
 * update 表名 set 列1 = 值1 where expr
 * select * from 表名 where expr
 *      order by xx       默认升序
 *      order by xx desc  降序
 *      order by xx1,xx2    根据两列排序，xx1相同时，根据xx2排序
 *
 *
 */
$conn = mysql_connect('localhost','root','root');
if(!$conn){
    die('Could not connect: '.mysql_error());
}else {
    echo 'Connect success!'.'<br>';

    if (mysql_close($conn)){
        echo 'Close success!';
    }
}
