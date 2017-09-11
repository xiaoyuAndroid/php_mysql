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

//$sql = "select * from persons";
//$sql = "select * from persons where age = 100";
//$sql = "select * from persons where Firstname = 'Glenn'";
$sql = "select * from persons order by Age desc";

$result = mysql_query($sql);
//print_r(mysql_fetch_array($result));
//while ( $row = mysql_fetch_array($result )){
//    echo 'Firstname is '.$row[1].' Lastname is '.$row[2].' Age is '.$row[3];
//    echo '<br>';
//}

// 将结果在 HTML 表格中输出
// 在 PHP 中嵌入 html代码时，把 html 标签当做字符串来用
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// 关闭数据库连接
mysql_close($conn);