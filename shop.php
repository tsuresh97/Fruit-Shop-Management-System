<html>
<body>
<style>

body {
    background-color: coral;
}

header {
    background-color:4162BA ;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: white;
}



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
  background-image: url("barcode.jpg");
  
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

</style>

<form method = post action=shop.php>
<header>
Billing Section
</header>
<body vlink=red>
<div class="bg-image"></div>
<div class="bg-text">

<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
echo"DATE:<input type=text name=d1>";
$date=$_POST["d1"];
$ss=10/10/2000;
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("purchase5") or die("database error");
$res=mysql_query("Select date from purchase6");
while($rn=mysql_fetch_array($res))
{
$ss=$rn['date'];
}
echo"<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSupplier's ID:<select name=s1>";
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sur6") or die("database error");
$res=mysql_query("Select proid from sur7");
while($rn=mysql_fetch_array($res))
{
$rno=$rn['proid'];
echo "<option value =".$rno.">".$rno."</option>";
}
echo "</select>";
echo"<br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProduct Name:<input type=text name=t6><br>"; 
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantity:<input type=text name=t7><br>"; 
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRate Per K/g:<input type=text name=t8><br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGST:<input type=text value=5% name=t9><br>";
$e=$_POST["s1"];
$g=$_POST["t6"];
$h=$_POST["t7"];
$i=$_POST["t8"];
$j=0;

mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase5")or die("database error");
$per=1;
$suresh=$e*10000;
$res=mysql_query("Select counter from purchase6");
while($rn=mysql_fetch_array($res))
{
$id=$rn['counter'];
$per=$id+1;
}
$pro=$suresh+$per;
$price=$h*$i;
$total=$price;
$ma=1;
$l=0;
$vat=0;
$profit=0;
$discount=0;


echo"<center><input type=submit value=ADD name=b4>";
echo"<center><input type=submit value=CONFORM name=b88>";
echo"<input type=submit value=DELETE name=b5>";
echo"<input type=reset value=CLEAR>";
$btn4=$_POST["b4"];
$btn88=$_POST["b88"];
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase1")or die("database error");
if($btn4=="ADD")
{
 $res=mysql_query("insert into purchase2 values($e,$pro,'$g',$h,$i,$j,$k,$l,$total,$ma)");
 mysql_connect("localhost","root","")or die("localhost error");
 mysql_select_db("purchase5")or die("database error");
 $res=mysql_query("insert into purchase6 values($per,$pro,'$g',$h,$i,$j,$profit,$total,'$ss')");
}
$btn5=$_POST["b5"];	
if($btn5=="DELETE")
{
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase5")or die("database error");
$res=mysql_query("delete from purchase6 where quantity!=0");
}
echo"<a href=un.php><h1>print<h1></a>";
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase5")or die("database error");
$res=mysql_query("select * from purchase6")or die("Table error");
echo"<Table border=1>";
echo"<tr><th>PROID<th>PRONAME<th>QTY<th>RATE<th>TOTAL</tr>";
while($rn=mysql_fetch_array($res))
{
   echo"<tr><td>".$rn['proid'];
   echo"<td>".$rn['proname'];
   echo"<td>".$rn['quantity'];
   echo"<td>".$rn['rate'];
   echo"<td>".$rn['total']."</tr>";
}
  echo"</table>";
?>
</form>
</body>
</html>