<?php
include 'connect.php';
$sql = "SELECT * FROM message_table";
$result = mysqli_query($conn,$sql);

echo mysqli_num_rows($result);
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["msg_id"]. " - Notification: " . $row["msg_text"];
    }
} else {
    echo "0 results";
}
*/
?>