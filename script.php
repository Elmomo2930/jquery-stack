<?php


include('dataconnect.php');

// if($conn) {
    
//     echo 'yes ist the data';
// }

$searchin = $_POST['search'];


if(!empty($searchin)) {
    
     $qry = "SELECT * FROM trucks WHERE truck LIKE '$searchin%'";

     $search_qry = mysqli_query($conn, $qry);

     $counter = mysqli_num_rows($search_qry);

     if(!$search_qry) {

        die('QRYS FAIL' . mysqli_error($conn));
     }

     if ($counter <= 0) {
         # code...
         
         echo 'sorry I dont have the selected object';

     } else {
        
         while($row = mysqli_fetch_array($search_qry)) {

         $badge = $row['truck'];

         ?>

         <ul class="list-unstyled">
          
          <?php
 
            echo "<li>{$badge} in way </li>";

          ?>

         </ul>
     
        <?php   }
     }
}


?>