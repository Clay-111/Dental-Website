<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dental Care Website</title>

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
   <table class="table">
      <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Date</th>
            <th>Action</th>
         </tr>
      </thead>

      <tbody>
         <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $database = "contact_db";

             $connection = new mysqli($servername, $username, $password, $database);

             if($connection->connect_error){
               die("Connection Failed: " . $connection->connect_error);
             }

            $select = "SELECT * FROM `contact_form`";
            $result = $connection->query($select);

            if(!$result){
               die("Invalid Query: " . $connection->error);
            }

            while($row = mysqli_fetch_assoc($result)){
               echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[number]</td>
                        <td>$row[date]</td>
                        <td>
                           <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                           <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                        </td>
                     </tr>";
            };
         ?>
      </tbody>
   </table>

</body>

</html>