<?php
include "con.php";
$sql = "select * from books";
$res = musql_query($con,$sql);
while($data = mysql_fetch_assoc($res)){
    echo $data['id'].$data[name].$data[author].$data[year].$data[isbn].$data[genre]."<br>";
}
?>
