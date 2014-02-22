<?php

// Check the connection
$db = mysqli_connect("184.168.44.70","chooserdb","Aznsw0rd!","chooserdb");

// Sanitize inputs
$storyid = mysqli_real_escape_string($db, $_POST["storyid"]);

// Get the rows
$result = mysqli_query($db, "SELECT username, points FROM Bets WHERE storyid=$storyid");

$arr = array();

  if($result){

  
    while($row = mysqli_fetch_array($result)){
      $point = $row[1];
      echo $row[0]." bet ".$point." point(s)<br/>";
      }

    //    echo mysqli_fetch_all($result);
    

    mysqli_free_result($result);
  } else {
    echo "Failed to retrieve data";
  }

mysqli_close($db);

?>