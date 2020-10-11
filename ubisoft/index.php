<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>

<?php
  $ck=mysqli_connect("localhost", "root", "", "images"); ;
  $query = "SELECT * FROM images";
  $result = mysqli_query($ck, $query); 
  $cnt=0;
  $flag=0;
  $ini=0;
  while($r=mysqli_fetch_object($result))
    {
      $flag=1;
        $res[]=$r;
        $ini++;
    }
      $count=0;
      if($flag==1){
      $res=array_reverse($res);
      while($count<6){
      $arr[]=$res[$count];
      if($count==$ini-1) break;
      $count=$count+1;
      }
    }
    else {
      echo "No item in Queue :)";
    }
?>

<!DOCTYPE html> 
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/javascript.js"></script>
  </head>
<div class="lr">
<a href="reg.php">Register form</a> 
</div>
<div class="cont">
      <?php 
        $cnt=0;
        while($cnt<6 && $flag==1){
          if(sizeof($arr)==$cnt) break;
      ?>
   <div class="map">
      <div class="imgg"><img src=<?php echo 'image/'.$arr[$cnt]->Image ?> class="check"> </div>
      <div class="tit"> <?php echo $arr[$cnt]->Title ?></div>
      <div class="des"> <?php echo $arr[$cnt]->Description ?></div>
    </div>
    <?php 
      $cnt=$cnt+1;
        }
    ?>

</div>
<div class="qr"> Queue[<?php 
    if($flag==1)
    echo count($res);
    else echo 0;  
  ?>]
</div>
</html> 

