<?php

include '../config/config.php';

$id = $_REQUEST['id'];


$sql = "DELETE FROM students WHERE id=$id";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<div class='suc_msg my-5'>Student data Deleted!</div>";
}else {
    echo "<div class='err_msg'>fail to delete </div>";
}


?>