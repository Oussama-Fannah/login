<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">

    <h4>CONNECT TO SCHOOL SPACE</h4>
    <div class="row">
        <div class=" col-6">
            <form class="form1" method="post" enctype="multipart/form-data" action="studentSpace.php">
                <h3>STUDENT LOG IN</h3>
                <label>student ID :</label>
                <input type="text" placeholder="id" name="id">
                <input type="submit" value="Connect" name="btn1" class="btn">
            </form>
        </div>
        <div class=" col-6">
            <form class="form2" method="post" enctype="multipart/form-data" action="teahcerSpace.php">
                <h3>TEACHER LOG IN</h3>
                <label class="label1">login :</label>
                <input type="text" placeholder="Login" name="login">
                <label class="label2">password :</label>
                <input type="password" placeholder="***********" name="password">
                <input type="submit" value="Connect" name="btn2" class="btn">
            </form>
        </div>
    </div>
</body>

</html>