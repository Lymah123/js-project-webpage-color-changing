<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>HTML FORM</h1>
    <div class="container">
        <form action="connect.php" method="post">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="input gender-container">
    <label>Gender</label>
    <input class="gender1" type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input class="gender1" type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input class="gender1" type="radio" id="others" name="gender" value="others">
    <label for="others">Others</label>
</div>
    <div class="input">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number"  autocomplete="off">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"  autocomplete="off">
            </div>
            <div class="btn">
                <div class="button">
                    <button type="submit">Submit data</button>
        </form>
    </div>
</body>
</html>
