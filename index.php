<?php
include "./data.php";
include "./includes/Movie.php";
include "./includes/Actor.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Movies App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
  body{
    background: rgb(55,65,81);
    color:#E5E7EB;
  }
  .w3-top .w3-center{
    background:#bfbf2d;
    font-weight:bold;
    border-radius: 10px;
    color:#000;
  }
  .movie_div{
    margin-bottom: 1em;
    border-top: 1px solid #fff;
  }
</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-center w3-padding-16">
      MOVIES WEB APP
    </div>
  </div>
</div>
  

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <div class="w3-row-padding w3-padding-16 w3-center">
    <?php
        foreach ($movies as $movi)
        {
            $movie = new Movie($movi);
        ?>
            <div class="w3-quarter w2-margin-right movie_div"  style="overflow:hidden">
              <img src="<?php echo $movie->get_movie_image(); ?>"  style="height:200px">
              <h3><?php echo $movie->get_movie_title(); ?></h3>
              <p>Runtime - <?php echo $movie->get_movie_run_time(); ?></p>
              <p>Release Date - <?php echo $movie->get_movie_release_date(); ?></p>
              <h5>Cast </h5><?php 
                foreach($movie->get_movie_actors($actors) as $actrs){
                   echo $actrs['name'] .' | DOB - '. $actrs['dob'].'<br/>';
                }
              ?>
            </div>
                <?php
        }
    ?>
   
  </div>
  
  
  <hr id="about">
   Demo App

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
