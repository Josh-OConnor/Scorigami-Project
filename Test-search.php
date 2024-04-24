<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Score</title>
    <style>
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
        form {
            margin-top: 100px;
            text-align: center;
        }

        label {
            font-size: 18px;
            margin-right: 10px;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border: 2px solid #10624d;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #10624d;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
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
        .score-box {
            background-color: #10624d;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            border-radius: 4px;
        }
        .table-container {
            overflow-x: auto;
        }

        .table-container table {
            width: 100%;
            table-layout: fixed;
        }

        .table-container th,
        .table-container td {
            width: 25%;
            word-wrap: break-word;
        }

    
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

    <form method="get">
        <label for="score">Enter Score:</label>
        <input type="text" id="score" name="score" placeholder="e.g., 20-17">
        <input type="submit" name="search" value="Search">
    </form>

<?php



require_once('dbconn.php');


if(isset($_GET['score'])) {
    $score = $_GET['score'];
   
   
    $scores = explode('-', $score);
    $winningScore = $scores[0];
    $losingScore = $scores[1];
    echo "<div class='score-box'>";
    echo "Winning Score: " . $winningScore . ", Losing Score: " . $losingScore;
    echo "</div>";

  
    $tables = array('bears', 'Bengals', 'Bills', 'Broncos', 'Browns', 'Tampa', 'Cardinals', 'Chargers', 'Chiefs', 'Colts', 'Commanders', 'Cowboys', 'Dolphins', 'Eagles', 'Falcons', 'Giants', 'Jags', 'Jets', 'Lions', 'Packers', 'Panthers', 'New England', 'Raiders', 'Rams', 'Ravens', 'Saints', 'seattle', 'steelers', 'Texans', 'Titans', 'Vikings');

    echo "<div class='table-container'>";
    echo "<table>";
    echo "<tr><th>Winning Team</th><th>Winning Score</th><th>Losing Team</th><th>Losing Score</th></tr>";

    foreach($tables as $table) {
        
        $query = "SELECT `W-Team` AS WTeam, `W-Score` AS WScore, `L-Team` AS LTeam, `L-Score` AS LScore FROM `$table` WHERE `W-Score` = $winningScore AND `L-Score` = $losingScore";
    
        
        if ($table === 'bears') {
            $query .= " AND `L-Team` != 'Chicago Bears'";
        } else if ($table === 'Bengals') {
            $query .= " AND `L-Team` != 'Cincinnati Bengals'";
        } else if ($table === 'Bills') {
            $query .= " AND `L-Team` != 'Buffalo Bills'";
        } else if ($table === 'Broncos') {
            $query .= " AND `L-Team` != 'Denver Broncos'";
        } else if ($table === 'Browns') {
            $query .= " AND `L-Team` != 'Cleveland Browns'";
        } else if ($table === 'Tampa') {
            $query .= " AND `L-Team` != 'Tampa Bay Buccaneers'";
        } else if ($table === 'Cardinals') {
            $query .= " AND `L-Team` != 'Arizona Cardinals'";
        } else if ($table === 'Chargers') {
            $query .= " AND `L-Team` NOT IN ('Los Angelos Chargers', 'San Diego Chargers')";
        } else if ($table === 'Chiefs') {
            $query .= " AND `L-Team` != 'Kansas City Chiefs'";
        } else if ($table === 'Colts') {
            $query .= " AND `L-Team` NOT IN ('Indianapolis Colts', 'Baltimore Colts')";
        } else if ($table === 'Commanders') {
            $query .= " AND `L-Team` NOT IN ('Washington Commanders', 'Washington Redskins')";
        } else if ($table === 'Cowboys') {
            $query .= " AND `L-Team` != 'Dallas Cowboys'";
        } else if ($table === 'Dolphins') {
            $query .= " AND `L-Team` != 'Miami Dolphins'";
        } else if ($table === 'Eagles') {
            $query .= " AND `L-Team` != 'Philadelphia Eagles'";
        } else if ($table === 'Falcons') {
            $query .= " AND `L-Team` != 'Atlanta Falcons'";
        } else if ($table === 'Giants') {
            $query .= " AND `L-Team` != 'New York Giants'";
        } else if ($table === 'Jags') {
            $query .= " AND `L-Team` != 'Jacksonville Jaguars'";
        } else if ($table === 'Jets') {
            $query .= " AND `L-Team` != 'New York Jets'";
        } else if ($table === 'Lions') {
            $query .= " AND `L-Team` != 'Detroit Lions'";
        }else if ($table === 'Packers') {
            $query .= " AND `L-Team` != 'Green Bay Packers'";
        }else if ($table === 'Panthers') {
            $query .= " AND `L-Team` != 'Carolina Panthers'";
        }else if ($table === 'New England') {
            $query .= " AND `L-Team` != 'New England Patriots'";
        }else if ($table === 'Raiders') {
            $query .= " AND `L-Team` NOT IN ('Oakland Raiders', 'Las Vegas Raiders', 'Los Angelos Raiders')";
        }else if ($table === 'Rams') {
            $query .= " AND `L-Team` NOT IN ('St Louis Rams','Los Angelos Rams')";
        }else if ($table === 'Ravens') {
            $query .= " AND `L-Team` != 'Baltimore Ravens'";
        }else if ($table === 'Saints') {
            $query .= " AND `L-Team` != 'New Orleans Saints'";
        }else if ($table === 'seattle') {
            $query .= " AND `L-Team` != 'Seattle Seahawks'";
        }else if ($table === 'steelers') {
            $query .= " AND `L-Team` != 'Pittsburgh Steelers'";
        }else if ($table === 'Texans') {
            $query .= " AND `L-Team` != 'Houston Texans'";
        }else if ($table === 'Titans') {
            $query .= " AND `L-Team` NOT IN ('Houston Oilers','Tennessee Titans')";
        }else if ($table === 'Vikings') {
            $query .= " AND `L-Team` != 'Minnesota Vikings'";
        }else if ($table === '49ers') {
            $query .= " AND `L-Team` != 'San Francisco 49ers'";
        }
        
    
    $result = mysqli_query($dbc, $query);
    
    if (!$result) {
        die("Query failed for table $table: " . mysqli_error($dbc));
    }
    
   
    echo "<table>";
   
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['WTeam'] . "</td>";
        echo "<td>" . $row['WScore'] . "</td>";
        echo "<td>" . $row['LTeam'] . "</td>";
        echo "<td>" . $row['LScore'] . "</td>";
        echo "</tr>";
    }
}
    echo "</table>";
    echo "</div>";
    

}
    mysqli_close($dbc);

?>
</body>
</html>
