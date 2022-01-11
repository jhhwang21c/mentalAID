<?php

$db_host = 'devdb.cd1shbzvohww.ap-northeast-2.rds.amazonaws.com';
$db_user = 'admin';
$db_password = 'a65458525';
$db_name = 'DB_Dev';

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (!$con) {
    //echo "Error: Unable to connect to MySQL." . PHP_EOL . "<br>";
    //echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
    //echo "Debugging error: " . mysqli_connect_error() . PHP_EOL . "<br>";
    exit;
}

/*
$sql = "SELECT * FROM mentalCenter";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<th>cntrClass</th>";
    echo "<th>cntrName</th>";
    echo "<th>cntrPhone</th>";
    echo "<th>cntrAdd</th>";
    echo "<th>cntrHome</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['cntrClass'] . "</td>";
        echo "<td>" . $row['cntrName'] . "</td>";
        echo "<td>" . $row['cntrPhone'] . "</td>";
        echo "<td>" . $row['cntrAdd'] . "</td>";
        echo "<td>" . $row['cntrHome'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
*/

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL . "<br>";
//echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL . "<br>";
//echo "MySQL 접속 성공<br><br>";

?>
