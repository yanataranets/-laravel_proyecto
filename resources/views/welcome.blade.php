<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body>


<div class="container mt-4">
    <div class="row">

        <div class="col">
            <h1>Registration form</h1>
            <form action="App\Http\Controllers\AuthController" method="post">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"><br>
                 <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"><br>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"><br>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>

        <div class="col">
            <h1>Authorisation form</h1>
            <form action="App\Http\Controllers\AuthController" method="post">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"><br>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"><br>
                <button type="submit" class="btn btn-success">Authorize</button>
            </form>
        </div>
    </div>
     <div>

    </div>
</div>
</body>
</html>
