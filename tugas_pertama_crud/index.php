<?php

include_once("koneksi.php");
$tampil = mysqli_query($mysqli, "SELECT * FROM crud");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BELAJAR CRUD</title>
</head>
<body>
    
<a href="create.php">Create Data</a><br/><br/>

<table width='80%' border=1>

<tr>
    <th>Nama</th> 
    <th>Username</th> 
    <th>Password</th> 
    <th>Email</th>
    <th>opsi</th>
</tr>
<?php  
while($data = mysqli_fetch_array($tampil)) {         
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";    
    echo "<td>".$data['email']."</td>";    
    echo "<td><a href='update.php?id=$data[id]'>update</a> | <a href='delete.php?id=$data[id] ' >delete</a></td></tr>";        
}
?>
</table>


</body>
</html>