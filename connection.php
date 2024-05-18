<?PHP
//header('Content-Type: text/html; charset=utf-8'); 
/*$PDBMIS=
"(DESCRIPTION =
(ADDRESS = (PROTOCOL = TCP)(HOST =100.100.1.34)(PORT = 1521))
(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = itbl)
)
)";
$conn = ocilogon("BBOA", "bboa",$PDBMIS, "AL32UTF8");*/

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bboa_test";

$servername = "localhost";
$database = "notunasha_main_db";
$username = "root";
$password = "";

//mysqli_set_charset('utf8');
$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_set_charset($conn, "UTF8");
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
    print_r($conn);
	echo "Connection Failure!";
}
else{
	// echo "Successfully Connected";
}

echo "<br> </br>";
?>              