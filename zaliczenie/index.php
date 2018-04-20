<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title> Dane osobowe </title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content=" Marika Jarosz ">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1> BAZa DANYCH</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=home">Home</a></li>
      <li><a href="index.php?id=pokaz">Pokaż rekordy od 30 do 60 </a></li>
      <li><a href="index.php?id=dodaj">Rekordy z miejscowościami na A</a></li>
      <li><a href="index.php?id=usun">16 luty 2009</a></li>
      <li><a href="index.php?id=zmien">18 a 10 lat</a></li>
      <li><a href="index.php?id=rekord">Rekord</a></li>
    </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
     <?php
        require('config.inc.php');
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connection success";
        
        $id = isset ($_GET['id'])?$_GET['id']: "";
        
        switch ($id)
        {
         case "home": require('home.inc.html'); break;
         case "pokaz": require('pokaz.inc.html'); break;
         case "dodaj":require ('dodaj.inc.html'); break;
         case "usun": require ('usun.inc.html'); break;
         case "zmien": require ('zmien.inc.html'); break;
         case "rekord": require ('rekord.inc.html'); break;
         default: require ('home.inc.html');
        }
        mysqli_close($conn);
    ?> 
   </p>
  <div id="footer">
        &copy; 2018 Marika Jarosz
  </div>

</body>
</html>					