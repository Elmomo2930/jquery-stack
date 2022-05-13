<?php

include('dataconnect.php');



$qry = "SELECT * FROM trucks";

$name_inf = mysqli_query($conn, $qry);

if(!$name_inf) {
   
    die('QRY FAIL' . mysqli_error($conn));

}

while ($rows = mysqli_fetch_array($name_inf)) {
    # code...
   
      echo "<input type='text' class='form-control obj_id'>";

      echo "<input type='button' class='btn btn-primary obj_id'>";

      echo "<input type='button' class='btn btn-danger obj_id'>";

     
}


?>