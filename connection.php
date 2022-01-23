<!-- 🎯 MySQLi Object-Oriented -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Bootstrap Links -->
    <?php include "links/links.php" ?>

</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center">
            <?php
            $server = "localhost";
            $userName = "root";
            $password = "";
            $database = "collage2";
            // Create Connection
            $conn = new mysqli($server, $userName, $password, $database);
            // Checking Connection
            if ($conn->connect_errno) {
                die("😪OOPS,CONNECTION FAILED<hr>");
            } else {
                echo "🕺CONNECTION SUCCESSFULL<hr>";
            }

            ?>
        </h1>
    </div>
</body>

</html>