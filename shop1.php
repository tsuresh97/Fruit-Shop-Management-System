<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #FF0000;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

</head>
<body bgcolor="sky blue">
<form method=post action=shop1.php>
<h1><center><font color=black>SUPPLIER'S DETAIL<center></h1>
<body vlink=red>
<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sample") or die("database error");
echo "Name:<input type=text name=t1 value><br>";
echo"Age:<input type=text name=t2><br>";
echo"Mobile.No:<input type=text name=t3><br>";
echo"e-mail:<input type=text name=a1><br>";
echo"<br><input type=submit value=SAVE>";
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["a1"];
$res1=mysql_query("insert into sample1 values('$a',$b,$c,'$d')");

?>
</form>
</body>
</html>