<?php

include('dataconnect.php');

if (isset($_POST['id'])) {
    # code...

   $id = mysqli_real_escape_string($conn, $_POST['id']);

    $qry = "SELECT * FROM trucks WHERE id= {$id}";

$name_inf = mysqli_query($conn, $qry);

if(!$name_inf) {
   
    die('QRY FAIL' . mysqli_error($conn));

}

while ($rows = mysqli_fetch_array($name_inf)) {
    # code...
     
      echo "<tr>";

      echo "<td class='obj_id>{$rows['id']}</td>";

      echo "<td><a rel='".$rows['id']."' class='name-link'
      href='javascript:void(0)'>{$rows['truck']}</a></td>";

      echo "</tr>";
}


}


?>

<script>

//   $('#action-contain').hide()

  $('.name-link').on('click', function() {
            
      $('#action-contain').show()


      var id = $(this).attr("rel")

      $.post('procesing.php', {id: id}, function(date) {

           
           $('#action-contain').html(date)
           
      })

  })


</script>