<html>
<head>
<title>PoolHUB - Create Account</title>
</head>

<body>
  <script language ="php">
    $servername = "kcpgm0ka8vudfq76.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
    $username = "rwo2djsuir4rzqhp";
    $password = "lxfzio37ojo0vw4v";
    $dbname = "ddwx8hd7lvfw45b0";
    $query = "SELECT * FROM login";
    $result = $dbname($query);


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $query, $result);

    // Check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
  </script>
<p>
<script language="JavaScript">
test = "<script language="php"> echo $str </script>";
document.write(test);

</script>

</p>
</body>
<html>
