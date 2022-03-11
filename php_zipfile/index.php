<?php

if(isset($_FILES['zip'])){
   $errors= array();
   $file_name = $_FILES['zip']['name'];
   $file_size =$_FILES['zip']['size'];
   $file_tmp =$_FILES['zip']['tmp_name'];
   $file_type=$_FILES['zip']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['zip']['name'])));

   $extensions= array("zip","rar","arj");
   
   if(in_array($file_ext,$extensions)=== false){
      $errors[]="extension not allowed, please choose a zip or rar file.";
   }
   
   if($file_size > 2097152){
      $errors[]='File size must be less than 2 MB';
   }
   
   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"zip/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }

}
   $zip = new ZipArchive;
  
   $file_name = $_FILES['zip']['name'];
   $path='zip/';
   $location=$path.$file_name;      
   
   // Zip File Name
   if ($zip->open($location) === TRUE) {
     
       // Unzip Path
       $zip->extractTo('unzip/');
       $zip->close();
       echo 'Unzipped Process Successful!';
   } else {
       echo 'Unzipped Process failed';
   }
   if(unlink($location)){
        echo "deleting file sucessfully";

   }
   else
   echo "cant delete file sucessfully";

?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="zip" />
         <input type="submit" >
      </form>
      
   </body>
</html>