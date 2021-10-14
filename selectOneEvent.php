<?php
  include 'dbConnect.php';
  try {
    $sql = "SELECT * FROM wdv341_events WHERE id=1;";
    $stmt  = $conn->prepare($sql); //prepate the statement
    $stmt->execute(); // the result Object is still in database format

    //$result = $stmt->fetch(PDO::FETCH_ASSOC); - for a single record
  }
  catch(PDOException $e) {
    echo "Errors: " . $e->getMessage() ."\r\n";
    echo "Sorry for the inconvience";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This webpage will implement SQL keyword SELECT to retrieve all the records from the specified datatable">
  <meta name="keywords" content="SQL, SELECT, MYSQL, MARIADB">
  <meat name="author" content="Joshus Allen">
  <link rel="stylesheet" href="selectOneEvent.css">
  <title>SQL SELECT One Event</title>
</head>
<body>
  <header>WDV341 SELECT One Event Assingment</header>
<?php
echo "<h1>Query Results</h1>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Description</th><th>Presenter</th><th>Date</th><th>Time</th></tr>";
try {
  foreach( $stmt->fetchAll(PDO::FETCH_ASSOC) as $row)

{
echo '<tr>';
echo '<td>',$row['name'],'</td>';
echo '<td>',$row['description'],'</td>';
echo '<td>',$row['presenter'],'</td>';
echo '<td>',$row['date'],'</td>';
echo '<td>',$row['time'],'</td>';
echo "</tr>";
} 
}
catch(PDOException $e) {
  echo "Errors: " . $e->getMessage() . "\r\n";
  echo "Sorry for the inconvenience";
}
echo "</table>";


?>
</body>
</html>