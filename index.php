<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="action.php" method="post">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" required>
            <br>
            <br>
            <label for="Last Name">Last Name</label>
            <input type="text" name="Last Name" required>
            <br>
            <br>
            <label for="Adderss">Adderss</label>
            <input type="text" name="Adderss" style="height: 140px;" required>
            <br> 
            <br>
            <label for="Country">Country</label>
            <select required NAME='Country' >
                <option NAME='Country' value="" disabled selected >Select country</option>
                <option NAME='Country' value="Egy">Egypt</option>
                <option NAME='Country' value="Ksa">Saudia Arabia</option>
                <option NAME='Country' value="Uae">United Arabian Emirates</option>
                <option NAME='Country' value="Alg">Algeria</option>
                <option NAME='Country' value="Tun">Tunisia</option>
            </select>
            <br>
            <br>
            <label for="Gender">Gender</label>
            <input type="radio" name="Gender" value="Male" required >Male
            <input type="radio" name="Gender" value="Female" required>Female
            <hr>
            <br>
            <br>
            <label for="Skills">Skills</label>
            <input type="checkbox" name="skill[]" value="Php" >Php
            <input type="checkbox" name="skill[]" value="MYSQL" >MYSQL
            <input type="checkbox" name="skill[]" value="Mongo">Mongo
            <input type="checkbox" name="skill[]" value="J2SE">J2SE
            <hr>
            <br>
            <br>
            <label for="User Name"> User Name </label>
            <input type="text" name="User Name" required >
            <br>
            <br>
            <label for="Password">Password</label>
            <input type="password" name="Password" required >
            <br>
            <br>
            <label for="Department">Department</label>
            <input type="text" name="Department" required>
            <br>
            <br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form> 
    </div>

<?php

$data = file('customers.txt');

echo "<table class='table'>
<thead>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    <th> Password </th>
    <th> Gender </th>
    <th>Country</th>
    <th>Address</th>
    <th>Skills</th>
    <th>Department</th>
    <th> Edit </th>
    <th> Delete </th>
  </tr>
</thead>

"
;

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    echo "<tr>

        <td> $line[0] </td>
        <td> $line[1] </td>
        <td> $line[2] </td>
        <td> $line[3] </td>
        <td> $line[4] </td>
        <td> $line[5] </td>
        <td> $line[6] </td>
        <td> $line[7] </td>
        <td> $line[8] </td>
        <td><a href='edit.php?username=$line[2]' > Edit </a></td>
        <td> <a href='delete.php?username=$line[2]'> Delete </a> </td>
    </tr>
    ";
}
echo "</table>";
?>
</body>
</html>






