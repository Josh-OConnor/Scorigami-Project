<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorigami</title>
    <style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    color: #333;
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

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 80px;
    padding: 0 20px;
}

.card {
    width: 300px;
    padding: 30px;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-top: 45px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card a {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 10px;
    background-color: #10624d;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.card .team-button {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 10px;
    background-color: #10624d;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.card .team-button.cardinals:hover {
    background-color: #97233f; 
}

.card .team-button.falcons:hover {
    background-color: #a71930; 
}

.card .team-button.ravens:hover {
    background-color: #241773; 
}

.card .team-button.bills:hover {
    background-color: #00338d; 
}

.card .team-button.panthers:hover {
    background-color: #0085ca;
}

.card .team-button.bears:hover {
    background-color: #c83803; 
}

.card .team-button.bengals:hover {
    background-color: #fb4f14; 
}

.card .team-button.browns:hover {
    background-color: #ff3c00; 
}

.card .team-button.cowboys:hover {
    background-color: #041e42; 
}

.card .team-button.broncos:hover {
    background-color: #fb4f14; 
}
.card .team-button.lions:hover {
    background-color: #0076b6; 
}
.card .team-button.packers:hover {
    background-color: #203731; 
}

.card .team-button.texans:hover {
    background-color: #03202f; 
}

.card .team-button.colts:hover {
    background-color: #002c5f; 
}

.card .team-button.jaguars:hover {
    background-color: #006778; 
}

.card .team-button.chiefs:hover {
    background-color: #e31837; 
}

.card .team-button.raiders:hover {
    background-color: #000000; 
}

.card .team-button.chargers:hover {
    background-color: #0080c6; 
}

.card .team-button.rams:hover {
    background-color: #003594; 
}

.card .team-button.dolphins:hover {
    background-color: #008e97; 
}

.card .team-button.vikings:hover {
    background-color: #4f2683; 
}

.card .team-button.patriots:hover {
    background-color: #002244; 
}

.card .team-button.saints:hover {
    background-color: #d3bc8d; 
}

.card .team-button.giants:hover {
    background-color: #0b2265; 
}

.card .team-button.jets:hover {
    background-color: #125740;
}

.card .team-button.eagles:hover {
    background-color: #004c54; 
}

.card .team-button.steelers:hover {
    background-color: #ffb612; 
}

.card .team-button.forty-niners:hover {
    background-color: #aa0000; 
}

.card .team-button.seahawks:hover {
    background-color: #002244; 
}

.card .team-button.buccaneers:hover {
    background-color: #d50a0a; 
}

.card .team-button.titans:hover {
    background-color: #0c2340;
}

.card .team-button.commanders:hover {
    background-color: #5a1414; 
}

.right-card .year-button {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 10px;
    background-image: linear-gradient(to right, #fff 50%, #10624d 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-position 0.5s ease;
}

.right-card .year-button:hover {
    background-position: left bottom;
    color: #10624d;
}

.left-card {
     flex: 0 0 300px;
     margin-right: 20px;
}

.right-card {
    flex: 0 0 300px;
    margin-left: 20px;
}

#content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            padding-bottom: 20px;
}


#imageContainer {
    display: flex;
    justify-content: center;
    max-width: 100%;
    margin-top: 50px;
}

.scorigami-image {
    width: 100%;
    max-width: 800px;
    height: auto;
    border-radius: 10px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.scorigami-image:first-child {
    opacity: 1;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    line-height: 1.5;
}

@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 100%;
        margin-top: 30px;
    }
}
#iframe-container {
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
            margin-left: 275px;
            display: flex;
            justify-content: center;
            
}

iframe {
        width: 100%;
        height: 600px;
        border: none;
        margin: 0;
}

.text-box {
    width: 400px;
    height: 400px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    margin-top: 20px;
    margin-right: 20px;
    padding: 20px;
    overflow: hidden;
}

.text-box h1{
    font-size: 28px;
    color: #10624d;
    margin-bottom: 20px;
}

.text-box p {
    font-size: 16px;
    line-height: 1.6;
    color: #666; 
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


     <div class="container">
        <div class="left-card card">
            <h2>Search All Teams</h2>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Cardinals.php" class="team-button cardinals">Arizona Cardinals</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Flacons.php"class="team-button falcons">Atlanta Falcons</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Ravens.php"class="team-button ravens">Baltimore Ravens</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Bills.php"class="team-button bills">Buffalo Bills</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Panthers.php"class="team-button panthers">Carolina Panthers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Bears.php"class="team-button bears">Chicago Bears</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Bengals.php"class="team-button bengals">Cincinnati Bengals</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Browns.php"class="team-button browns">Cleveland Browns</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Cowboys.php"class="team-button cowboys">Dallas Cowboys</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Broncos.php"class="team-button broncos">Denver Broncos</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Lions.php"class="team-button lions">Detroit Lions</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Packers.php"class="team-button packers">Green Bay Packers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Texans.php"class="team-button texans">Houston Texans</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Colts.php"class="team-button colts">Indianapolis Colts</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Jaguars.php"class="team-button jaguars">Jacksonville Jaguars</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Chiefs.php"class="team-button chiefs">Kansas City Chiefs</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Raiders.php"class="team-button "class="team-button raiders">Las Vegas Raiders</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Chargers.php"class="team-button chargers">Los Angeles Chargers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Rams.php"class="team-button rams">Los Angeles Rams</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Dolphins.php"class="team-button dolphins">Miami Dolphins</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Vikings.php"class="team-button vikings">Minnesota Vikings</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Patriots.php"class="team-button patriots">New England Patriots</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Saints.php"class="team-button saints">New Orleans Saints</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Giants.php"class="team-button giants">New York Giants</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Jets.php"class="team-button jets">New York Jets</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Eagles.php"class="team-button eagles">Philadelphia Eagles</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Steelers.php"class="team-button steelers">Pittsburgh Steelers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/49ers.php"class="team-button forty-niners">San Francisco 49ers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Seahawks.php"class="team-button seahawks">Seattle Seahawks</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Bucs.php"class="team-button buccaneers">Tampa Bay Buccaneers</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Titans.php"class="team-button titans">Tennessee Titans</a><br>
            <a href="http://cs.oswego.edu/~joconno9/Scorigami/Commanders.php"class="team-button commanders">Washington Football Team</a><br>
        </p>
    </div>
       

    <div id="content-wrapper">
        <div id="imageContainer">
            <img src="" alt="Scorigami Image" class="scorigami-image" id="slideshow">
        </div>
        <div class="text-box">
        <h1>What Is Scorigami?</h1>
        <p>Scorigami is an intriguing concept in sports, particularly American football, where a final score combination has occurred for the first time in history. Each unique score configuration forms a "scorigami," celebrated by enthusiasts for its rarity. It reflects the diverse and unpredictable nature of games, capturing the imagination of fans who track and commemorate these occurrences.</p>
        </div>
        <div class="text-box">
            <img src="Table.png" alt="Scorigami Table" style="max-width: 100%; max-height: 100%;">
            <p>
            Looking at this column circled in red, this speaks to when this specific team earned this score. So when the rank is 1, that means that particular team was the first to end a game in that score. If it is 2 they were the second team, and so on.</p>

        </div>
        <div id="iframe-container">
            <iframe src="http://localhost/Scorigami/Graph2.php"></iframe>
        </div>
    </div>
        <div class="right-card card">
    <h2>Years of Games</h2>
    <p>
        <a href="http://localhost/Scorigami/1940.php" class="year-button">1940</a>
        <a href="http://localhost/Scorigami/1941.php" class="year-button">1941</a>
        <a href="http://localhost/Scorigami/1942.php" class="year-button">1942</a>
        <a href="http://localhost/Scorigami/1943.php" class="year-button">1943</a>
        <a href="http://localhost/Scorigami/1944.php" class="year-button">1944</a>
        <a href="http://localhost/Scorigami/1945.php" class="year-button">1945</a>
        <a href="http://localhost/Scorigami/1946.php" class="year-button">1946</a>
        <a href="http://localhost/Scorigami/1947.php" class="year-button">1947</a>
        <a href="http://localhost/Scorigami/1948.php" class="year-button">1948</a>
        <a href="http://localhost/Scorigami/1949.php" class="year-button">1949</a>
        <a href="http://localhost/Scorigami/1950.php" class="year-button">1950</a>
        <a href="http://localhost/Scorigami/1951.php" class="year-button">1951</a>
        <a href="http://localhost/Scorigami/1952.php" class="year-button">1952</a>
        <a href="http://localhost/Scorigami/1953.php" class="year-button">1953</a>
        <a href="http://localhost/Scorigami/1954.php" class="year-button">1954</a>
        <a href="http://localhost/Scorigami/1955.php" class="year-button">1955</a>
        <a href="http://localhost/Scorigami/1956.php" class="year-button">1956</a>
        <a href="http://localhost/Scorigami/1957.php" class="year-button">1957</a>
        <a href="http://localhost/Scorigami/1958.php" class="year-button">1958</a>
        <a href="http://localhost/Scorigami/1959.php" class="year-button">1959</a>
        <a href="http://localhost/Scorigami/1960.php" class="year-button">1960</a>
        <a href="http://localhost/Scorigami/1961.php" class="year-button">1961</a>
        <a href="http://localhost/Scorigami/1962.php" class="year-button">1962</a>
        <a href="http://localhost/Scorigami/1963.php" class="year-button">1963</a>
        <a href="http://localhost/Scorigami/1964.php" class="year-button">1964</a>
        <a href="http://localhost/Scorigami/1965.php" class="year-button">1965</a>
        <a href="http://localhost/Scorigami/1966.php" class="year-button">1966</a>
        <a href="http://localhost/Scorigami/1967.php" class="year-button">1967</a>
        <a href="http://localhost/Scorigami/1968.php" class="year-button">1968</a>
        <a href="http://localhost/Scorigami/1969.php" class="year-button">1969</a>
        <a href="http://localhost/Scorigami/1970.php" class="year-button">1970</a>
        <a href="http://localhost/Scorigami/1971.php" class="year-button">1971</a>
        <a href="http://localhost/Scorigami/1972.php" class="year-button">1972</a>
        <a href="http://localhost/Scorigami/1973.php" class="year-button">1973</a>
        <a href="http://localhost/Scorigami/1974.php" class="year-button">1974</a>
        <a href="http://localhost/Scorigami/1975.php" class="year-button">1975</a>
        <a href="http://localhost/Scorigami/1976.php" class="year-button">1976</a>
        <a href="http://localhost/Scorigami/1977.php" class="year-button">1977</a>
        <a href="http://localhost/Scorigami/1978.php" class="year-button">1978</a>
        <a href="http://localhost/Scorigami/1979.php" class="year-button">1979</a>
        <a href="http://localhost/Scorigami/1980.php" class="year-button">1980</a>
        <a href="http://localhost/Scorigami/1981.php" class="year-button">1981</a>
        <a href="http://localhost/Scorigami/1982.php" class="year-button">1982</a>
        <a href="http://localhost/Scorigami/1983.php" class="year-button">1983</a>
        <a href="http://localhost/Scorigami/1984.php" class="year-button">1984</a>
        <a href="http://localhost/Scorigami/1985.php" class="year-button">1985</a>
        <a href="http://localhost/Scorigami/1986.php" class="year-button">1986</a>
        <a href="http://localhost/Scorigami/1987.php" class="year-button">1987</a>
        <a href="http://localhost/Scorigami/1988.php" class="year-button">1988</a>
        <a href="http://localhost/Scorigami/1989.php" class="year-button">1989</a>
        <a href="http://localhost/Scorigami/1990.php" class="year-button">1990</a>
        <a href="http://localhost/Scorigami/1991.php" class="year-button">1991</a>
        <a href="http://localhost/Scorigami/1992.php" class="year-button">1992</a>
        <a href="http://localhost/Scorigami/1993.php" class="year-button">1993</a>
        <a href="http://localhost/Scorigami/1994.php" class="year-button">1994</a>
        <a href="http://localhost/Scorigami/1995.php" class="year-button">1995</a>
        <a href="http://localhost/Scorigami/1996.php" class="year-button">1996</a>
        <a href="http://localhost/Scorigami/1997.php" class="year-button">1997</a>
        <a href="http://localhost/Scorigami/1998.php" class="year-button">1998</a>
        <a href="http://localhost/Scorigami/1999.php" class="year-button">1999</a>
        <a href="http://localhost/Scorigami/2000.php" class="year-button">2000</a>
        <a href="http://localhost/Scorigami/2001.php" class="year-button">2001</a>
        <a href="http://localhost/Scorigami/2002.php" class="year-button">2002</a>
        <a href="http://localhost/Scorigami/2003.php" class="year-button">2003</a>
        <a href="http://localhost/Scorigami/2004.php" class="year-button">2004</a>
        <a href="http://localhost/Scorigami/2005.php" class="year-button">2005</a>
        <a href="http://localhost/Scorigami/2006.php" class="year-button">2006</a>
        <a href="http://localhost/Scorigami/2007.php" class="year-button">2007</a>
        <a href="http://localhost/Scorigami/2008.php" class="year-button">2008</a>
        <a href="http://localhost/Scorigami/2009.php" class="year-button">2009</a>
        <a href="http://localhost/Scorigami/2010.php" class="year-button">2010</a>
        <a href="http://localhost/Scorigami/2011.php" class="year-button">2011</a>
        <a href="http://localhost/Scorigami/2012.php" class="year-button">2012</a>
        <a href="http://localhost/Scorigami/2013.php" class="year-button">2013</a>
        <a href="http://localhost/Scorigami/2014.php" class="year-button">2014</a>
        <a href="http://localhost/Scorigami/2015.php" class="year-button">2015</a>
        <a href="http://localhost/Scorigami/2016.php" class="year-button">2016</a>
        <a href="http://localhost/Scorigami/2017.php" class="year-button">2017</a>
        <a href="http://localhost/Scorigami/2018.php" class="year-button">2018</a>
        <a href="http://localhost/Scorigami/2019.php" class="year-button">2019</a>
        <a href="http://localhost/Scorigami/2020.php" class="year-button">2020</a>
        <a href="http://localhost/Scorigami/2021.php" class="year-button">2021</a>
        <a href="http://localhost/Scorigami/2022.php" class="year-button">2022</a>
        <a href="http://localhost/Scorigami/2023.php" class="year-button">2023</a>
    </p>
</div>
    </div>

    <script>
         var images = ['Bengals.png', 'Bills.png', 'Broncos.png', 'Browns.png', 'Cardinals.png', 'Chargers.png', 'Chiefs.png', 'Colts.png', 'Cowboys.png', 'Dolphins.png', 'Eagles.png', 'Falcons.png', 'Giants.png', 'Jets.png', 'Lions.png', 'Packers.png', 'Patriots.png', 'Raiders.png', 'Rams.png', 'Saints.png', 'Steelers.png', 'Titans.png', 'Vikings.png'];
        var currentIndex = 0;

        function changeImageWithFade() {
            var img = document.getElementById('slideshow');
            img.style.opacity = 0;
            setTimeout(function() {
                img.src = images[currentIndex];
                img.style.opacity = 1;
            }, 500);
            currentIndex = (currentIndex + 1) % images.length;
        }
       
        window.onload = function() {
        var img = document.getElementById('slideshow');
        img.src = images[currentIndex];
    };
        setInterval(changeImageWithFade, 3000);
    </script>
</body>
</html>
