<html>

<head>
  <title> Planning Poker  </title>
</head>

<body>

<form name="poker" action="php/bet.php" method="post">

   Username: <input type="text" name="username" value="Name"> 
   <br/>
   RTC Story ID: <input type="number" name="storyid" value="Story ID">
   <br/>
   Points: <select name="points">
   <option value="0">0</option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="5">5</option>
   <option value="8">8</option>
   <option value="13">13</option>
   <option value="20">20</option>
   <option value="40">40</option>
   <option value="100">100</option>


   </select>

   <br/>   
   <input type="submit">

</form>

</body>

</html>