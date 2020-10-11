
<title>Image Upload</title> 
<link rel="stylesheet" href="css/style.css">

<br>
  <a href="index.php" class="aa">Clcik here to go to home page</a>
<div id="content"> 
  
  <form method="POST" action="" enctype="multipart/form-data">
        <div class="pp1"><input type="text" name="title" value="" placeholder="Title" class="inp1"></div>
        <div class="pp2"><input type="text" name="Description" value="" placeholder="Description" class="inp2"> </div>
        <div class="pp3"><input type="file" name="uploadfile" value="" class="inp3"> </div>
        
      <div> 
          <button type="submit" name="upload" onclick="location.href='index.php';" class="btn">UPLOAD</button> 
        </div> 
        <div>
        <input type="reset" value="Reset" class="btn1">
        </div>
    </form>
  
  
</div>
<?php

$msg = ""; 
if (isset($_POST['upload'])) {
  $db = mysqli_connect("localhost", "root", "", "images"); 
  $filename = $_FILES["uploadfile"]["name"]; 
  $tempname = $_FILES["uploadfile"]["tmp_name"];     
  $folder = "image/".$filename;
  $first_name = mysqli_real_escape_string($db, $_REQUEST['title']);
  $last_name = mysqli_real_escape_string($db, $_REQUEST['Description']);
  
  $sql = "INSERT INTO images (Title, Description, Image) VALUES ('$first_name', '$last_name', '$filename')";
  if(mysqli_query($db, $sql)){
      echo "Added successfully.";
  }
  move_uploaded_file($tempname, $folder);
  mysqli_close($db);

}

?>