<?php

// Check the connection
$db = mysqli_connect("184.168.44.70","chooserdb","Aznsw0rd!","chooserdb");

// Sanitize inputs
$username = mysqli_real_escape_string($db, $_POST["username"]);
$points = mysqli_real_escape_string($db, $_POST["points"]);
$storyid = mysqli_real_escape_string($db, $_POST["storyid"]);

// Insert the values
mysqli_query($db, "INSERT INTO Bets (username, storyid, points) VALUES ('$username',$storyid,$points)");

//echo "INSERT INTO Bets (username, storyid, points) VALUES ('$username',$storyid,$points)";

echo "<html><head><meta http-equiv='REFRESH' content='0;url=http://www.levicai.com/planningpoker/results'></head></html>";

mysqli_close($db);

?>