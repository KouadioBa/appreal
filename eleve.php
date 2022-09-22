<?php
    //include our connection
	  include 'connect.php';

    

    // data validate
    if($_POST){
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $image = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $folder = 'images/';
        move_uploaded_file($imageTmp,$folder.$image);

        if(!empty($firstname) && !empty($name) && !empty($age) && !empty($image)){
            $db->prepare('INSERT INTO eleves (firstname,name,age,image) VALUES ("'.$firstname.'","'.$name.'","'.$age.'","'.$image.'")');
        } 
        else{
            echo "juste pour un test donc ok!!!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test for db on SQLite3</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  
  <div class="container">
  <h1 style="text-align:left;color:white" class="title pt-5">Liste des élèves</h1>
    <div class="row pb-5">
      <?php
      $sql = "SELECT * FROM eleves";
      $result = $db->query($sql);
      while($row = $result->fetchArray(SQLITE3_ASSOC)){
          echo "
            <div class='col-md-4 pt-5'>
              <div class='card'>
                <img class='card-img-top img-thumbnail' style='height:300px;width: 100%;' src='images/".$row['image']."' alt='Card image cap'>
                <div class='card-body'>
                  <h5 class='card-title' style='color: #4e73df;'>Nom : <strong style='color: black;'>".$row['firstname']."</strong></h5>
                  <h5 class='card-title' style='color: #4e73df;'>Prénom : <strong style='color: black;'>".$row['name']."</strong></h5>
                  <h5 class='card-title' style='color: #4e73df;'>Prénom : <strong style='color: black;'>".$row['age']."</strong></h5>
                  <p class='card-text'>
                      <a href='savoir_plus.php?id=".$row['id']."'>
                          <button type='button' class= 'btn btn-primary' style='width: 100%'>Savoir Plus</button>
                      </a>
                  </p>
                </div>
              </div>
            </div>
          ";
        }

        
      ?>
    </div>
    <button class="btn btn-info"><a href="eleve_admin.php" style="text-decoration:none;color: white">System admin</a></button>
  </div>
</body>

