<?php
//Show the error, if any
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//create connection
$connection=mysqli_connect('127.0.0.1','root','','arm robot');
if(!$connection)//cheak the connection
{
	echo 'No connection ' . mysqli_connect_errno() ;
	echo "<br>";

}//CLOSE IF
else{
echo 'yes conection ';
echo "<br>";
}//CLOSE ELSE
//SUB_TASK 3//
$engine1=$_POST['engine1'];
$engine2=$_POST['engine2'];
$engine3=$_POST['engine3'];
$engine4=$_POST['engine4'];
$engine5=$_POST['engine5'];
$engine6=$_POST['engine6'];

//INSERT TO DB//
//SAVE
if(isset($_POST['save']))
{

    echo "<br>";
$my_query="INSERT INTO engines (engine1,engine2,engine3,engine4,engine5,engine6) VALUES('$engine1','$engine2','$engine3','$engine4','$engine5','$engine6')";
if(mysqli_query($connection, $my_query))
{
	
echo "Saved successfully";
}//CLOSE IF
else 
{
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

}//CLOSE ELSE

//ON////
}// CLOSE IF
else if(isset($_POST['on']))
 {
    echo "<br>";

    $my_query = "INSERT INTO run (isOn) VALUES (1)";
    if(mysqli_query($connection, $my_query))
    {
echo "ON successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE

//OFF////////
}//CLOSE ELSE IF
else if(isset($_POST['off'])) 
{
    echo "<br>";
    $my_query ="INSERT INTO run (isOff) VALUES (0)";
    if(mysqli_query($connection, $my_query))
    {
echo "OFF successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE
}//CLOSE ELSE IF


?>