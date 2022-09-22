<?php
    //include our connection
    include 'connect.php';
    $id = 0;

    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( !empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // delete data
    // $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "DELETE FROM eleves WHERE id = $id";
    $db->query($sql);
    
    header("Location: eleve_admin.php");

}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Create Data!</title>
</head>
<body class="bg-gradient-primary">
<div class="container">
<h1 style="text-align:left;color:white" class="title pt-5">Supprimer un Élève</h1>
    <div class="span10 offset1" style="margin-top: 50px; margin-left: 50px">
        <form class="form-horizontal" action="delete.php" method="post" style="margin-top: 50px;">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <p class="alert alert-danger" role="alert">Êtes vous sûr de vouloir supprimer ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn btn-light" style="color:#4e73df" href="eleve_admin.php">No</a>
            </div>
        </form>
    </div>
</div> <!-- /container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>