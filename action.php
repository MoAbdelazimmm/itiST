<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="form.php" method="post">
            <label for="First Name">First Name</label>
            <input type="text" name="First Name" required >
            <br>
            <br>
            <label for="Last Name">Last Name</label>
            <input type="text" name="Last Name" required >
            <br>
            <br>
            <label for="Adderss">Adderss</label>
            <input type="text" name="Adderss" style="height: 140px;" required>
            <br>
            <br>
            <label for="Country">Country</label>
            <select required >
                <option value="" disabled selected >Select country</option>
                <option value="Egy">Egypt</option>
                <option value="Ksa">Saudia Arabia</option>
                <option value="Uae">United Arabian Emirates</option>
                <option value="Alg">Algeria</option>
                <option value="Tun">Tunisia</option>
            </select>
            <br>
            <br>
            <label for="Gender">Gender</label>
            <input type="radio" name="Gender" value="Male" required >Male
            <input type="radio" name="Gender" value="Female" required >Female
            <br>
            <br>
            <label for="Skills">Skills</label>
            <input type="checkbox" name="Skills" value="Php">Php
            <input type="checkbox" name="Skills" value="MYSQL">MYSQL
            <input type="checkbox" name="Skills" value="Mongo">Mongo
            <input type="checkbox" name="Skills" value="J2SE">J2SE
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
            <input type="text" name="Department">
            <br>
            <br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form> 
    </div>
</body>
</html> -->



    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["Last_Name"];
        $address = $_POST["Adderss"];
        $country = $_POST["Country"];
        $gender = $_POST["Gender"];
        $skills = $_POST["skill"];
        $user_name = $_POST["User_Name"];
        $password = $_POST["Password"];
        $department = $_POST["Department"];


        echo "<p> First Name: " . $first_name . "</p>";
        echo "<p> Last Name: " . $last_name . "</p>";
        echo "<p> Address: " . $address . "</p>";
        echo "<p> Country: " . $country . "</p>";
        echo "<p> Gender: " . $gender . "</p>";
        echo "<p> Skills: " . implode(", ", $skills) . "</p>";
        echo "<p> User Name: " . $user_name . "</p>";
        echo "<p> Password : " . $password . "</p>";
        echo "<p> Department: " . $department . "</p>";
    }

 ?>