<?php
$rrc = $_GET['l4Tua'];
$name = hex2bin($rrc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>happy diwali </title>
  
  <!-- HTML -->
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">
  <!-- font 
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Big+Shoulders+Inline+Text:wght@900&family=Merienda:wght@700&display=swap" rel="stylesheet">-->
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
 <audio src="ha.mp3"  id="audio"></audio> 
 <audio src="di.mp3" id="audio2" loop></audio>
 <div id="screen">
     <img src="200w.gif" alt=""/>
     <span class="h2">click me!</span>
 </div>
 <div id="ani">
  <h1 class="ml4">
  <span class="letters letters-1">03</span>
  <span class="letters letters-2">02</span>
  <span class="letters letters-3">01</span>
</h1>
</div>

 <div id="box"> 
 <img  src="dec.png" alt="" width="300" id="deco1"/>
<h1>HAPPY <br /> Diwali</h1>
<h5>from</h5>
<h2><?php echo ($name); ?></h2>
 </div> 
 <div class=" tex-center" id="small">
     <a href="index"><button class="btn btn-outline-danger">click here</button></a> <br />
 <small class="text-success h5"> to get the link with your name</small>
 </div>
</body>
</html>
<script type="text/javascript" charset="utf-8" src="main.js">
    
</script>
