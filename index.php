<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body bgcolor="pink">
    <div><h1>Registration Form</h1></div>
    <div>
        <form action="connect.php" method="post">
            <label for="user">Name:</label><br>
            <input type="text" name="name" id="name" required /> <br> <br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required /> <br> <br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required /> <br> <br>
           
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" id="phone" required /> <br> <br>

            <label for="course">Course:</label><br>
            <input type="text" name="course" id="course" required /> <br> <br>

            <label for="address">Address:</label><br>
            <textarea name="address" id="address" cols="30" rows="10"></textarea><br> <br>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>