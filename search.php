<?php
include "dbconnect.php";

if (isset($_GET['term'])) {
 $query = "SELECT name FROM table WHERE name LIKE '%{$_GET['term']}%' GROUP BY name ORDER BY name LIMIT 30";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_array($result)) {
     $arr[] = $row['name'];
   }
 } else {
   $arr = array();
 }
 echo json_encode($arr);
}
?>
