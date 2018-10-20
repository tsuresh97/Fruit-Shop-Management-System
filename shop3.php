<html>
<head>
<style>




body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("help.jpg");
  
  /* Add the blur effect */
  filter: blur(4px);
  -webkit-filter: blur(4px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
 }
 

header {
    background-color:4162BA ;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: white;
}
</style>
</head>
<body>
<header>
<h1><center>Stock Section</center></h1></header>
<br><br><br><br><br><br><div class="bg-image"></div>
<div  class="bg-text">
<form action =post action=shop3.php>

<body vlink=red>
<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sample") or die("database error");
echo"<table border=1>";
echo"<tr><th>Name<th>Age<th>Mobile Number<th>e-Mail Id</tr>";
$res=mysql_query("Select * from sample1");
while($rn=mysql_fetch_array($res))
{
$bd1=$rn['a'];
$bd7=$rn['b'];
$bd2=$rn['c'];
$bd3=$rn['d'];
echo "<tr><td>".$bd1."<td>".$bd7."<td>".$bd2."<td>".$bd3."</tr>";

}
?>