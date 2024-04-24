<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>1960</title>
    <style>
       <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            color: white;
            background-color: #10624d;
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            border: none;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px;
            text-align: left;
        }
        
        th {
            background-color: #10624d;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .no-records {
            text-align: center;
            color: #888;
            margin-top: 20px;
        }
        h1 {
            color: white;
            background-color: #10624d;
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-top: 80px;
        }
        .navbar {
    background-color: #10624d;
    color: #fff;
    padding: 15px 20px;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-container {
    width: 100%;
    max-width: 1200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-left,
.navbar-right {
    display: flex;
    align-items: center;
}

.navbar-link {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
}

.navbar-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.navbar-link:hover,
.navbar-button:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.navbar-center {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
}

.navbar-title {
    background-color: #fff;
    color: #10624d;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
}
    </style>
    </style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-left">
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Homepage.php" class="navbar-link">Home</a>
        </div>
        <div class="navbar-center">
            <div class="navbar-title">Scorigami</div>
        </div>
        <div class="navbar-right">
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Test-search.php?score=24-20&search=Search" class="navbar-link">Search</a>
        </div>
    </div>
</nav>
    <h1>1960 Games</h1>
<?php
require_once('dbconn.php');

$q = "SELECT * FROM `1960`"; 

$r = mysqli_query($dbc, $q) or die('Query error: ' . mysqli_error($dbc));

$num = mysqli_num_rows($r);

if ($num > 0) {
        echo "<table>";
        echo "<tr><th>Date</th><th>W-Team</th><th>L-Team</th><th>W-Score</th><th>L-Score</th></tr>";
        while ($row = mysqli_fetch_array($r)) {
            echo "<tr>";
        echo "<td>" . $row['Date'] .  "</td>";
        echo "<td>" . $row['W-Team'] .  "</td>";
        echo "<td>" . $row['L-Team'] . "</td>";
        echo "<td>" . $row['W-Score'] . "</td>";
        echo "<td>" . $row['L-Score'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No records were returned</p>";
}

mysqli_close($dbc);
?>
</body>
</html>
