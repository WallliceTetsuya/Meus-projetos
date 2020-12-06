<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js" ></script>
    <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto" style="max-width: 75%">
        <div  class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form   class="form-signin" action="admin.inc.php"> 
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="senha" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin"  type="submit">ENTRAR</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>