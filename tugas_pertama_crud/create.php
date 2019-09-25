<html>
<head>
    <title>CREATE</title>
</head>

<body>

    <h2>CREATE DATA</h2>


    <form action="create.php" method="post" name="form">
        <table width="35%" border="0">
        <tr> 
         
                <td><input type="hidden" name="id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" pattern="[A-Za-z ]+"></td> <!-- //inputan tidak boleh angka -->
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="user" required></td> <!-- //required = inputan tidak boleh kosong -->
            </tr>
            <tr> 
                <td>Passsword</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><br></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
        <a href="index.php">Kembali</a>
    <br/><br/>
    </form>

    <?php

   
    if(isset($_POST['Submit'])) {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];

        include_once("koneksi.php");

        $sql = mysqli_query($mysqli, "INSERT INTO crud VALUES('$id','$nama','$username','$password','$email')");

        if ($sql) {
            ?>

            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href = "index.php";
            </script>
            <?php
        }
    }
    ?>
</body>
</html>