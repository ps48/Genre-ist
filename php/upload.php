<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Allow certain file formats


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

      $str = 'python C:\xampp\htdocs\projects\Genrerist\cepsMusic\classifier.py C:\xampp\htdocs\projects\Genrerist\php\uploads'.'\\'.basename( $_FILES["fileToUpload"]["name"]);
      
      $python =  exec($str);
      

      $loc ="Location: ../index.php?genre=".$python;
      header($loc);
      exit();

?>
