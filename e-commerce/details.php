<?php
include 'data.php';
$item=$_REQUEST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
</head>
<body style="background: #CCE5FF">
    
<div class="card mb-3" style="max-width: 950px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/<?=$data[$item]['src']?>" class="img-fluid rounded-start" alt="<?=$data[$item]['alt']?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$data[$item]['title']?></h5>
        <p class="card-text"> <?=$data[$item]['more']?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
            crossorigin="anonymous"></script>
</body>
</html>
