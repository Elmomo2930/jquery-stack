<?php

include('dataconnect.php');


if(isset($_POST['obj_name'])) {

    $name = $_POST['obj_name'];

    $qry = "INSERT INTO trucks(truck) VALUES('$name')";

    $name_info = mysqli_query($conn, $qry);

    if(!$name_info) {
       
        die('QRY FAIL');

    }

    header('LOCATION: main.html');

}


?>