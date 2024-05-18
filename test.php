<?php
include 'connection.php';
$sql = "SELECT * FROM post_news";
$result = mysqli_query($conn, $sql);
// oci_execute($parse);

while ($row = mysqli_fetch_assoc($result)) {
    $main[] = $row; 
}


?>