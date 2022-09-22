<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un eleve</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head> 
<body>
    <div class="container pt-5">
        <h1 style="text-align:left;color:#ccc" class="title pt-5 pb-5">Ajouter un élève</h1>
        <form action="eleve_admin.php" method="POST" enctype="multipart/form-data" style="margin-bottom:20px">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">firstname</label>
                <input required = "required" type="text" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">name</label>
                <input required = "required" type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input required = "required" type="date" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input required = "required" type="file" class="form-control" name="image">
            </div>
            <button type="submit" name="send" class="btn btn-primary" value="Envoyer">Envoyer</button>
        </form>
        <button class="btn btn-info"><a href="eleve_admin.php" style="text-decoration:none;color: white">Élèves admin</a></button>
    </div>
</body>
</html>