<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Crime Reports</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Random Crime Reports</h2>
        <div class="card">
            <div class="card-body">
                <?php
                // Database connection settings
                $servername = "system";
                $username = "Aditya";
                $password = "123";
                $dbname = "test.db";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch random crime reports from the database
                $sql = "SELECT * FROM anonymous_reports ORDER BY RAND() LIMIT 5";
                $result = $conn->query($sql);

                // Display crime reports
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='mb-4'>";
                        echo "<h5>Crime Type: " . $row["crime_type"] . "</h5>";
                        echo "<p>Location: " . $row["location"] . "</p>";
                        echo "<p>Day & Date: " . $row["day_date"] . "</p>";
                        echo "<p>Description: " . $row["description"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No crime reports found.";
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-gi0CmUkozxCXKw2uU5pPzCO9mVPnjl5s2G94gXakfmAqEq73xD/V+S3nHQ6AeTQT"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>
