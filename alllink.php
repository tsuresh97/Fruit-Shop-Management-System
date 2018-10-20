<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body, html {
    height: 100%;
    margin: 0;
    
}

.bg {
    /* The image used */
    background-image: url("Fruit1.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
header {
    background-color:4162BA ;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: white;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   font-size: 15px;
   background-color: 4162BA;
   color: black;
   text-align: center;
}ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}
li1 {
    float: right;
}

li1 a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li1 a:hover {
    background-color: FF0000;
}
li a:hover {
    background-color: #E52A56;
}
</style>
</head>
<body class="bg">
<form method = post action=alllink.php>
<embed src="music.wav" autostart="true" loop="false width="2" height="0">
<header>
  <h2>Google Fruit Shop</h2>
</header>




<ul>
  <li><a class="active" href="shop1.php">New Supplier</a></li>
  <li><a class="active" href="shop.php">Purchase</a></li>
  <li><a class="active" href="shop3.php">View Supplier</a></li>
  <li><a class="active" href="about.html">About Us</a></li>
  <li1><a class="active1" href="index.php">Logout</a></li1>
  
</ul>

</form>
<div class="footer">
  <p>&copy; All Rights Reserved From Suresh Arunachalam T</p>
</div>
</body>
</html>