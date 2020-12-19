<?php
$status = $_GET["status"];
$device = $_GET["device"];

include "db.php";

$sql = "INSERT INTO Status (device, status) VALUES ($device, $status)";

if ($status == 0 and $status != "") {
	if ($conn->query($sql) === TRUE) {
  		echo "green";
	} else {
		  echo "error";
	}
} else if ($status == 1) {
	if ($conn->query($sql) === TRUE) {
                echo "red";
        } else {
                  echo "error";
        }
} else {
	echo "error";
}

$conn->close();
?>
