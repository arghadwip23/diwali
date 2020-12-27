<?php
$rrc = $_GET['l4Tua'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:title" content="Something special">
    <meta property="og:description" content="Some surprise for you don't waste time let's open it">
    <meta property="og:image" itemprop="image" content="https://www.wish-u.herokuapp.com/thumbnail.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <title>happy New Year </title>
  
  <!-- HTML -->
  <link rel="shortcut icon" href="balloon.png" type="image/x-icon" />
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">
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

 <div id="bodys">
     <img src="new.png" alt=""  id="new"/>
    <img src="balloon.png" alt="" id="ballon" />
    <img src="new2.png" alt="" id="new2" />
   <div class="card" id="head">
    <h1 class="text-center">Happy <span id ="new"> New</span> Year<br /> 2021</h1> 
    </div>
    <div class="text-justify p-4 card" id="card">
        Cheers to more shared successes in the new year! Wishing you and yours some well~deserved downtime and a very happy new year. to come. Cheers to health, happiness, and prosperity in 2021! Wishing you and your family a safe, healthy, and prosperous new year!
    </div>
    <h6 id="greet" class="text-right h4 mr-4 pr-4">-</h6>
    <div class="text-right pr-4">
    <a href="index.php" target="_blank">
    <button class=" btn btn-danger mr-4">
    Creat your with<br /> your name
    </button>
    </a>
    </div>
 </div>
</body>
<script type="text/javascript" charset="utf-8">
   var name = '<?php echo $rrc; ?>';
function b(hexav){
    var arr1 = [];
    //var spl = hexav.match(/.{1,2}/g);
    var spl = hexav.split("gB");
    for (var n = 0, l = spl.length; n < l; n++)
    {
        var hex = String.fromCharCode(spl[n]);
        arr1.push(hex);
    }
    return arr1.join('');
}
let out = b('name');
document.getElementById('greet').innerText=out;
</script>
</html>
<script type="text/javascript" charset="utf-8" src="main.js">
    
</script>
