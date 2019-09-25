<?php 
include_once("koneksi.php");
$id1 = $_GET['id'];
$sql = mysqli_query($mysqli, "SELECT * FROM crud WHERE id='$id1'");
$tampil = $sql->fetch_assoc();

 ?>
 <!DOCTYPE html>
 <html >
 <head>

 </head>
 <body>

    <h2>UPDATE DATA</h2>

 <form action="update.php" method="post" name="form1">
        <table width="35%" border="0">
        <tr> 
         
                <td><input type="hidden" name="id" value="<?php echo $tampil['id']; ?>"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td> <!-- //echo buat nampilin data yang ada di database -->
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="user" value="<?php echo $tampil['username']; ?>"></td>
            </tr>
            <tr> 
                <td>Passsword</td>
                <td><input type="text" name="pass" value="<?php echo $tampil['password']; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $tampil['email']; ?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
        <a href="index.php">Kembali</a>
    <br/><br/>
    </form>
     
     <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];

        $sql1 = mysqli_query($mysqli, "UPDATE crud SET id='$id', nama='$nama', username='$username', password='$password', email='$email' WHERE id='$id'");

        if($sql1){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil DiUbah");
                window.location.href="index.php";
            </script>
        
        <?php 
        }
    }
     ?>

 </body>
 </html>