<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login!</title>
</head>

<body>
	
<form action="login.php" method="post" name="form">
    <div class="row">
        <div class="col-10 container">
            <div class="row">
                <div class="col-6">
                    <img src="img3.png" class="image text-center">
                </div>
                <div class="col-6 data mx-auto">
                        <h1 class="text-center header">Daftar yuk!!</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" 
                            name="username" placeholder="Masukan Username">
                        </div>
                        <div class="form-group password">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                        </div>
						<button type="submit" name="simpan" class="btn btn-info btn1 mx-auto">Login!</button>
						<button type="submit" name="buat" class="btn btn-info btn1 mx-auto">Simpan!</button>
                </div>
            </div>
        </div>
    </div>
    </div>
	</form>
	<?php
if(isset($_POST['simpan'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $sql="insert into userlogin where username='".$user."'AND password='".$pass."'";
 $conn = mysqli_connect('localhost', 'root', '', 'loginphp');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }
}
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>