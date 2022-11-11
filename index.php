<?php 
require_once "./actions/db_connect.php";

$sql="SELECT * from media";
$result=mysqli_query($conn,$sql);
$tbody="";

if (mysqli_num_rows($result)>0) {
    while($row=mysqli_fetch_assoc($result)) {
        $tbody .= "
        <div class='card mb-3' style='max-width: 540px;'>
  <div class='row g-0'>
        <div class='col-md-4'>
      <img src='pictures/".$row['image']."' class='img-fluid rounded-start' alt=''>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>" .$row['title']. "</h5>
        <p class='card-text'><small class='text-muted'>".$row['type']." written/directed by ".$row['author_first_name']." ".$row['author_last_name']." </small></p>
        <p class='card-text'>".$row['short_description']."</p>
        <p class='card-text'><small class='text-muted'><a href='details.php'><button class='btn btn-primary btn-sm' type='button'>Read more</button></a></small></p>
        
        <a href='update.php?id=" . $row['media_id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
        <a href='delete.php?id=" . $row['media_id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
      </div>
    </div>
    </div>
    </div>
        ";
    } 
}else {
        $tbody="<tr><td colspan='4' class='text-center'>Be the first to add a recommendation</td></tr>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>
   
    <?php require_once "components/boot.php" ?> 
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

<!-- navbar from bootstrap -->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#">Big Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white ">
        <li class="nav-item ">
          <a class="nav-link text-white " href="index.php">Our recommendation</a>
        </li>  
      </ul>  
    </div>
  </div>
</nav>
<!-- end of the navbar -->

<!-- <h1 class="text-center">Our recommendations to cozy up with this fall</h1> -->
    
<!-- card from bootstrap -->

            <tbody>
                <?php echo $tbody; ?> 
            </tbody>
  


</body>
</html>