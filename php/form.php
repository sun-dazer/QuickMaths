<!-- Purpose: makes the form and sends the form information to the database -->
<?php
$conn = mysqli_connect("localhost","root","","leaderboard");
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $score = $_POST["score"];

$query = "INSERT INTO SCORES VALUES('', '$name', '$score')";
mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Leaderboard</title>
    <style>
        h1 {
            text-align: center;
            color: #002d52;
            font-family: "ＭＳ Ｐゴシック";
        }
        form {
            text-align: center;
        }
        input[type=text] {
            width: 30%;
            padding: 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #help {
            width: 30%;
            background-color: #002d52;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #center {
            text-align: center;
        }
        #leader {
            width: 30%;
            background-color: #002d52;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


    </style>
</head>
<body>
    <h1>
        Welcome to the Leaderboard!
    </h1>
    <form action="" method="post">
			<label for="">Name</label>
            <input type="text" name="name" required value="" placeholder="Leaderboard name">
            <br> 
            <label for="">Score</label>
            <input id="score" type="text" name="score" required value="" readonly>
            <br>
            <button id="help" type="submit" name="submit" onclick="window.location.href='leaderboard.php'">Submit</button>
    </form>
    <div id="center">
        <button id="leader" onclick="window.location.href='leaderboard.php'">Display leaderboard</button>
    </div>
    <script>
        document.getElementById("score").value = localStorage.getItem('correct');
    </script>

</body>
</html>