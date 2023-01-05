<?php
  // Connect to the database
  $host = "localhost";
  $user = "username";
  $password = "password";
  $dbname = "database_name";
  $conn = mysqli_connect($host, $user, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "<td>
        <button>Add</button>
        <button>Edit</button>
        <button>Delete</button>
      </td>";
      echo "</tr>";
    }
  } else {
    echo "No products found.";
  }
  
  mysqli_close($conn);
?>
