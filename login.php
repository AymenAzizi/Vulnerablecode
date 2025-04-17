$user = $_GET['user'];
$pass = $_GET['pass'];
$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
