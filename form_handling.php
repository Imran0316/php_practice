<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="get">
        <label for="name">User Name:</label> <br>
        <input type="text" name="name"> <br>
        
        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br>
        
        <label for="password">password:</label> <br>
        <input type="text" name="password"> <br>

        <label for="phone">Phone:</label> <br>
        <input type="tel" name="phone"> <br>

        <label for="gender">Gender:</label> <br>
        <label for="male">Male:</label>
        <input type="radio" name="male"> <br>
        <label for="female">Female:</label>
        <input type="radio" name="female"> <br>

        <input type="file" name="file" id="files"> <br>

        <input type="submit" value="submit">
    </form>
</body>
</html>