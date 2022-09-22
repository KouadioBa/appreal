<?php

  //include our connection
	include 'connect.php';
  
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $sql = "SELECT id, * FROM eleves WHERE id = $id";
	$query = $db->query($sql);
	$row = $query->fetchArray();

  if(isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $image = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $folder = 'images/';

    //update our table
    $sql = "UPDATE eleves SET firstname = '$firstname', name = '$name', age = '$age', image = '$image' WHERE id = $id ";
    $result = $db->exec($sql);

    if($result){
      move_uploaded_file($imageTmp,$folder.$image);
    }else{
      // condition
    }

    header("Location: eleve_admin.php");
  }
 
?>
<!DOCTYPE html>
  <html lang="eng">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
      <title>CRUD Operation on SQLite3 Database using PHP</title>
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-primary">
    
      <div class="container pt-5">
      <h1 style="text-align:left;color:white" class="title pt-5 pb-5">Modifier un élève</h1>
        <form method="POST" style="margin-bottom:20px" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="firstname" style="color:white;font-size:25px" class="form-label">firstname</label>
              <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $row['firstname'];  ?>">
            </div>
            <div class="mb-3">
              <label for="name" style="color:white;font-size:25px" class="form-label">name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];  ?>">
            </div>
            <div class="mb-3">
              <label for="age" style="color:white;font-size:25px" class="form-label">Age</label>
              <input type="date" id="age" class="form-control" name="age" value="<?php echo $row['age'];  ?>">
            </div>
            <div class="mb-3">
              <label for="image" style="color:white;font-size:25px" class="form-label">Image</label>
              <input type="file" id="image" class="form-control" name="image" value="<?php echo $row['image'];  ?>">
            </div>
            <button class="btn btn-primary" type="submit" name="save">Enregistrer</button>
        </form>
        <button class="btn btn-info"><a href="eleve_admin.php" style="text-decoration:none;color: white">System admin</a></button>
      </div>
    </body>
  </html>