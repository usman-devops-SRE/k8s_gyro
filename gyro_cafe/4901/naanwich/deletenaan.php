<?php

    // Create connection to database
    $conn = mysqli_connect('localhost','root','','gyro cafe');
    // SQL query all data from salads table
    $sql = "DELETE from naanwich WHERE ID='$_GET[id]'";
    // Push data to result variable - alternative OOP syntax
    $result = mysqli_query($conn, $sql);  //$conn->query($sql);
    // Check to make sure there is a result by rows returned - alternative OOP syntax
    $resultcheck = mysqli_num_rows($result);  //$conn->num_rows($result);
    if($result)
        header("refresh:1; url=naantable.html");
    else
        echo "not deleted";

   
      $conn->close();
?>
