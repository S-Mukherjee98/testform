<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <center>
    <form action='form.php' method='post'>
    <div>
        <label for='name'>Name</label>
        <input type='text' name='name' />
    </div>
    <br>
    <div>
        <label for='phone'>Phone Number</label>
        <input type='phone' name='phone'  />
    </div>
    <br>
    <div>
        <label for='email'>Email</label>
        <input type='email' name='email' />
    </div>
    <br>   
    <button type='submit'>Submit</button>
    </form>
    </center>
</body>
</html>