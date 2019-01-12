<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cactus Don't Die</title>
</style>
</head>
<body>
        <p>Cactus Don't Die!</p>
<button onclick="myFunction()">手動幫寶寶澆水</button>

<script>
function myFunction() {
        $mystring = exec('sudo usr/bin/python3 /home/pi/Cactus/test.py);
        $mystring;
        if(!$mystring){
                echo"python exec failed";
        }
        else
        {
                echo"success";
        }
location.href = "./insert.php";
}
</script>
<br/>
<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "泥土實時狀況";
echo "<br>";
$sql = "SELECT SID, Status, Since FROM Soil order by Since DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["Status"] ==0){
                $row["Status"]="寶寶不渇";
        }
        else{
                $row["Status"]="寶寶渇死了";
        }
        echo "SID: " . $row["SID"]. "  Status: " . $row["Status"]. "  Record Time: " . $row["Since"]. "<br>";
    }
} else {
    echo "0 results";
}
echo "自動澆花記錄";
echo "<br>";
$sql = "SELECT WID, Action, HowLong, Since FROM Water order by Since DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["Action"] ==0){
                $row["Action"]="已澆水一次";
        }
        echo "WID: " . $row["WID"]. "  Action: " . $row["Action"]. " HowLong: " . $row["HowLong"] . "second(s)  Record Time: " . $row["Since"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
