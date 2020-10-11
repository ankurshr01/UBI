<?php
    $db = mysqli_connect("localhost", "root", "", "images"); 
    $sql="DELETE FROM images WHERE ID=(SELECT MAX(id) FROM images)";
    $res=mysqli_query($db, $sql);
    mysqli_close($db);
?>
