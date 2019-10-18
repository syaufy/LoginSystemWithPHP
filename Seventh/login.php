<?php
if(isset($_POST['simpan'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 $conn = mysqli_connect('localhost', 'root', '', 'loginphp');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }

 $sql="select * from userlogin where username='".$user."'AND password='".$pass."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        session_start();
        $_SESSION["nama"]=$row['username'];
        $_SESSION["pass"]=$row['password'];
        echo "<script>location='home.html';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='index.php';</script>";
    }
}
?>
<?php
if(isset($_POST['buat'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $sql="select * from userlogin where username='".$user."'AND password='".$pass."'";
 $conn = mysqli_connect('localhost', 'root', '', 'loginphp');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }
}
?>