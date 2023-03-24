<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico" type="image" sizes="32*32">
  <link rel="stylesheet" href="css/index2.css">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>Movie App</title>
  <style>
    img:hover {cursor: pointer}
    body {background-image: url("images/background/greybg.jpg"); background-color: rgba(255,255,255,0.6);
    background-blend-mode: lighten;  }
    <style>
* {
  box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
 
}

.left, .right {
  width: 33%;
}
.slider {
    margin: 24px auto;
    padding: 24px;
    background-color: #000;
    opacity: 0.7;
    width: 280px;
    text-align: center;

.middle {
  width: 33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
  </style>
</head>
<body>
  <?php
  include("header.php")
  ?>
  <body>
  <br><br>
  <p style="font-size: 40px; color: #ffffff; text-align:center" class="new">Accessibility Settings 
      </p><br><br><br>
<div class="row">
  <div class="column left" style="background-color:grey;padding:20px; text-align:center">
    <h2>Setting 1</h2>
    <p>[text]</p>
  </div>
  <div class="column middle" style="background-color:grey;padding:20px; text-align:center">
    <h2>Change Color Scheme</h2>
    <div class = "slider">
    <input type="range" min="0" max="255" value="0" onmousemove="func_1(this.value)" /><br />
    <input type="range" min="0" max="255" value="0" onmousemove="func_2(this.value)" /><br />
    <input type="range" min="0" max="255" value="0" onmousemove="func_3(this.value)" /><br />
    <span id="output">0, 0, 0</span>
</div>
    
  </div>
  <div class="column right" style="background-color:grey;padding:20px; text-align:center">
    <h2>Setting 3</h2>
    <p>[Text]</p>
  </div>
</div>
  </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    include("FOOTER.php")
    ?>
<script>
  function open1() {
    window.open("CLIP1.php", "MOVIE", "width=1920px", "height=1080px")
  }
  window.red = 0;
            window.green = 0;
            window.blue = 0;
            function func_1(value) {
                window.red = value;
                change_bg();
            }
            function func_2(value) {
                window.green = value;
                change_bg();
            }
            function func_3(value) {
                window.blue = value;
                change_bg();
            }
            function change_bg() {
                document.getElementById("output").innerHTML = window.red+", "+window.green+", "+window.blue;
                document.body.style.backgroundColor = "rgb("+window.red+","+window.green+","+window.blue+")";
            }
</script>
</body>
</html>