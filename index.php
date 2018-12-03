<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db = new mysqli($host, $user, $pass);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $db->query("SELECT * FROM users");
$user_arr = [];
if($result){
    while($obj = $result->fetch_object()){ 
            $line.=$obj->id; 
            $line.=$obj->name; 
        } 
}


echo '<pre>';
print_r($line);
echo '</pre>';

echo "Connected to MySQL successfully!";

phpinfo();
?>
