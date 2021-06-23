

<?php
//Show the error, if any
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//create connection
$connection=mysqli_connect('127.0.0.1','root','','arm robot');

//SUB_TASK 4//
//resive information from DB
$db   =mysqli_select_db($connection,'arm robot');
$sql  =mysqli_query($connection,"SELECT * FROM  engines ORDER BY engine1  DESC LIMIT 1");
//printing
while ($fetch =mysqli_fetch_assoc($sql)) {

echo "<br>";
echo ('engine1: ');
echo $fetch['engine1'];
echo "<br>";

echo ('engine2: ');
echo $fetch['engine2'];
echo "<br>";

echo ('engine3: ');
echo $fetch['engine3'];
echo "<br>";

echo ('engine4: ');
echo $fetch['engine4'];
echo " <br>";

echo ('engine5: ');
echo $fetch['engine5'];
echo " <br>";

echo ('engine6: ');
echo $fetch['engine6'];

}
mysqli_close($connection);

?>
