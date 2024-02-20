<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="school";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("we failed to connect database" . mysqli_connect_error());

}
else
{
    echo "successfully connected to database<br>";
}

$name ="mahesh";
$age ="26";
$schoolname ="rr clg";
$sql ="DELETE FROM `sgustudent` WHERE `sgustudent`.`srno` = 2";

$result = mysqli_query ($conn, $sql);

//check for the database creation success
if($result)
{
    echo " the data was inserted successfully!<br>";
}
else
{
    echo "the data was not inserted successfully------>". mysqli_error($conn);

}




?>