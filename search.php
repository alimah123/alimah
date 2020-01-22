<?php

include ('connection.php');

$keyword=$_GET['keyword'];

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE nama ='$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<HTMl>
<body>
    <a href="add.php">Tambah Data</a>

    <br/><br/>
    <form action="Search.php" method="get">
        <input type="text" name="keyword" placeholder="keyword .." value="<?php echo $_GET['keyword']?>"/>
        <button type="submit">Search</button>
    </form>
    </br>

    <table border="1">
     <tr>
        <th>Id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>umur</th>
        <th>jenis kelamin</th>
        <th>jabatan</th>
        <th>pilihan</th>
     </tr>
     <?php foreach($results as $result):?>
     <tr>
     <td><?php echo $result['id']?></td>
      <td><?php echo $result['nama']?></td>
      <td><?php echo $result['alamat']?></td>
      <td><?php echo $result['umur']?></td>
      <td><?php echo $result['jenis_kelamin']?></td>
      <td><?php echo $result['jabatan']?></td>
      <td>
        <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
        <a href="delete.php?id=<?php echo $result['id']?>">delete</a>
      </td>
     </tr>
    <?php endforeach; ?>
    </table>
</body>
</HTMl>