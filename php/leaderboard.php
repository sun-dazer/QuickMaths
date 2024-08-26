<!-- Purpose: creates the leaderboard table and displays the information from the database -->
<!DOCTYPE html>
<html>
<head>
    <style>
        table 
        {
            margin: auto;
            border-collapse: collapse;
            width: 25%;
            text-align: center;
            color: #002d52;
        }
        th
        {
            padding: 5px;
            border-bottom: 2px solid;
            font-size: 25px;
        }
        td 
        {
            padding: 5px;
            border-bottom: 1px solid;
        }
        button 
        {
            color: #002d52;
            background-color:white;
            font-size: 18px;
            padding: 12px 45px;
            border-radius: 20px;
            margin:20px
        }
        #c
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- include images ! -->
    <div id="table">
        <table>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "leaderboard");

                //if connection fails
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }

                //get name and scores, descending by scores
                $sql = "SELECT FirstName, Scores FROM scores ORDER BY Scores DESC";
                $result = $conn->query($sql);

                $rank = 1; //variable for ranking numbers

                //output data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $rank . "</td><td>"  . $row["FirstName"] . "</td><td>" . $row["Scores"] . "</td></tr>";
                    $rank++;
                }
                echo "</table>";
                $conn->close();
            ?>
        </table>
    <div id="table">
    <div id="c">
        <button id="retry" onclick="window.location.href='intro.html'">Try Again?</button>
    </div>
</body>
</html>