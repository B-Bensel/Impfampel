<?php
$device = $_GET["ik"];

include "db.php";

$sql = "SELECT * FROM Status WHERE device = '$device' ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    	if ($row["status"] == 0) {
		echo "p-3 bg-success text-white";
	} else {
		echo "p-3 bg-danger text-white";
	}
  }
} else {
  echo "p-3 bg-danger text-white";
}
$conn->close();

?>
