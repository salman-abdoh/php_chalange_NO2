<?php

include 'connect.php'; 

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
  <h4>products</ h4>
</div><br><br> 

<div class="container">

    <a href="add.php" class="btn btn-primary" style="float:right;">Add New products</a>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>idp</th>
        <th>Name</th>
        <th>Price</th>
        <th>descr</th>
        <th> image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $sql="select * from prudocts";
          ( $result = mysqli_query($con, $sql)) ;
           if($result){
          while( $row=mysqli_fetch_assoc($result)){
            $id = $row['idp'];
		        $name = $row['name'];
            $descr = $row['descr'];
            $price = $row['price'];
            $image = $row['image']; 
            echo
            ' <tr>
               <td>'.$id.'</td>
               <td>'.$name.'</td>
               <td>'.$price.'</td>
               <td>'.$descr.'</td>
               <td>'.$image.'</td>
               <td>
              
               <a class="btn btn-success" href="update.php?updateid='.$id.'" style="color:white">
                   <i class="fa fa-pencil" aria-hidpden="true"></i>update</a>
                  
                    <a class="btn btn-danger" href="delete.php?deleteid='.$id.'" style="color:white" onclick="confirm("Are you sure want to delete this record")">
                    delete<i class="fa fa-trash" aria-hidpden="true"></i> 
                 </a>
               </td>
             </tr>';
          } 
           
           }
     
      
        ?>
    </tbody>
  </table>
</div></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
    </script>
</body>
</html>