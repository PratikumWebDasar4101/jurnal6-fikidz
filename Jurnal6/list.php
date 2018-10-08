<?php
    require("koneksi.php");
?>

<html>
    <font size="50"><center>Data Mahasiswa</center></font>
    <table border="1" align="center">
        <tr bgcolor="lightblue" align="center">
            <td>Nama</td> 
            <td>NIM</td>
            <td>Kelas</td>
            <td>Jenis Kelamin</td>
            <td>Hobi</td>
            <td>Fakultas</td>
            <td>Alamat</td>
        </tr>
        <?php
            $query = $pdo -> prepare("SELECT * FROM mahasiswa");
            $query -> execute();
            while ($data = $query -> fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr bgcolor="lightgreen">
            <td align="center"><?php echo $data['nama'];?></td>
            <td align="center"><?php echo $data['nim'];?></td>
            <td align="center"><?php echo $data['kelas'];?></td>
            <td align="center"><?php echo $data['jeniskelamin'];?></td>
            <td align="center"><?php echo $data['hobi'];?></td>
            <td align="center"><?php echo $data['fakultas'];?></td>
            <td align="center"><?php echo $data['alamat'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</html>