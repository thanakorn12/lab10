<?php include "db.php"?>
<?php
	$stmt = $pdo->prepare("SELECT username FROM member");
    $stmt->execute();

	$takenUsernames = array();
    while($row = $stmt->fetch()) {
        array_push($takenUsernames, $row["username"]);
    }
?>
<?php
	sleep(1);

	if (!in_array( $_GET["username"], $takenUsernames )) {
		echo "okay";
	} else {
		echo "denied";
	}
?>
