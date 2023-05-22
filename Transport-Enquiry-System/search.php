<?php


if (isset($_POST['submit'])) {
    // Retrieve the search terms from the form submission
    $source = $_POST["source"];
    $destination = $_POST["destination"];

    // Establish a connection to the MySQL database.
$servername = "localhost";
$username = "root";
$password = "";
$database = "bus_data";

// Create a connection
$conn =  mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    // Write a SQL query to fetch the data based on the search terms
    $sql = "SELECT * FROM bus_details_1 WHERE departure_city = '$source' AND arrival_city = '$destination'";
    $result = $conn->query($sql);

    // Display the fetched data in a table format or show "Data not found"
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
        <th>BUS NUMABER</th>
        <th>DEPARTURE CITY</th>
        <th>ARRIVAL CITY</th>
        <th>DEPARTURE TIME</th>
        <th>ARRIVAL TIME</th>
        <th> DATE OF DEPARTURE</th>
        <th>DATE OF ARRIVAL</th>
        <th>ROUTE</th>
        <th>PRICE</th>
        </tr>";
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["bus_number"] . "</td>";
            echo "<td>" . $row["departure_city"] . "</td>";
            echo "<td>" . $row["arrival_city"] . "</td>";
            echo "<td>" . $row["departure_time"] . "</td>";
            echo "<td>" . $row["arrival_time"] . "</td>";
            echo "<td>" . $row["date_of_departure"] . "</td>";
            echo "<td>" . $row["date_of_arrival"] . "</td>";
            echo "<td>" . $row["route"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "For this destination bus is not available";
    }

    // Close the database connection (code from previous responses)
$conn->close();

}
?>
