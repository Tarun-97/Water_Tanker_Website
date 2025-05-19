<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 33%;
            text-align: center;
            border-collapse: collapse;
            background-color: #fff8f0;
        }
        table {
            margin: auto;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web121";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT * FROM StudentInfo121";
$result = mysqli_query($conn, $sql);

echo "<h2 style='text-align:center;'>Reviews</h2>";
echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Reviews</th>
      </tr>";

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['rvs']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='10'>No records found</td></tr>";
}

echo "</table>";

$conn->close();
?>
</body>
</html>
