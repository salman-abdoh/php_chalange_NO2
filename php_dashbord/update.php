<?php

include 'connect.php'; 
$id=$_GET['updateid'];
$sql="select * from prudocts where idp=$id";
         $result = mysqli_query($con, $sql);
          
         $row=mysqli_fetch_assoc($result);
            
		    $name = $row['name'];
            $descr = $row['descr'];
            $price = $row['price'];
            $image = $row['image']; 
if(isset($_POST['update'])){
   
      $name = $_POST['name'];
	  $descr = $_POST['descr'];
      $price = $_POST['price'];
      $image = $_POST['image']; 
      
      $sql="update prudocts set idp=$id,name='$name',descr='$descr',price='$price',image='$image' where idp=$id";
      $result=mysqli_query($con,$sql);
      if($result){
       header('location:index.php');
     // echo "up success";
      }else{die(MySqli_error($con));}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
   
   
       
</head>

<body>

<div class="card text-center" style="padding:15px;">
  <h4>ADD NEW PRODUCT</h4>
</div><br> 

<div class="container">
  <form    method="POST">
  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name"  required="" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" name="price"  required=""  value="<?php echo $price; ?>">
    </div>
    <div class="form-group">
      <label for="details">details:</label>
      <input type="text" class="form-control" name="descr" required=""  value="<?php echo $descr; ?>">
    </div>
    <div class="form-group">
      <label for="details">image:</label>
      <input type="text" class="form-control" name="image"  required=""  value="<?php echo $image; ?>">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" >
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="update">
    </div>
  </form>
</div>
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
    </script>
</body>
</html>