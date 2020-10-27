<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="center">
        <h1>Sign up</h1>
        <form action="insert" method="post">
            <div class="txt_field">
                <input type="text" name="username" placeholder="Username" class="form-control" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="pass">
            <form action="CRUD" method="get">
                <button type="submit" class="btn">Back</button>
            </form>
        </div>
    </div>
</body>
</html>