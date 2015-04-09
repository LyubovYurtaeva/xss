<?php
$name=$_GET['name']; $password=$_GET['password'];
$db=mysql_connect("localhost", "anna", "chanel");
mysql_select_db("new_db", $db);
if (isset($_GET['submit1']))
{
$result = mysql_query("SELECT password FROM users WHERE name='{$name}'", $db);
$row = mysql_fetch_array($result);
if ($row['password']==$password)
echo "Hello, $name";
else
echo "Incorrect password, $name";
}
else
{
$insert_sql="INSERT INTO users (name, password) VALUES ('{$name}', '{$password}')";
mysql_query($insert_sql);
echo "Helloo, $name";
}
?>
