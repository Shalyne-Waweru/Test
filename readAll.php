<?php

include_once 'DBConnector.php';
include_once 'user.php';
$dbcon = new DBConnector;

//Creating another user object
    $view = new User($first_name,$last_name,$user_city);
    $result = $view->readAll($dbcon);

    if($result){
        echo "Successful retrieval";
    }else{
        echo "Error!";
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Database Records</title>
</head>
<body>
    <table align = "center">
      <thead>
        <tr>
          <th> id </th>
          <th> first_name </th>
          <th> last_name </th>
          <th> user_city </th>
        </tr>
      </thead>
      
      <?php
          while ($row = mysqli_fetch_object($result)) 
          {     
      ?>
      <tbody>
        <tr>
          <td> <?php echo $row ->id?> </td>
          <td> <?php echo $row ->first_name?> </td>
          <td> <?php echo $row ->last_name?> </td>
          <td> <?php echo $row ->user_city?> </td>
        </tr>
      </tbody>

      <?php
          }
      ?>
    </table>
    </body>
</html>