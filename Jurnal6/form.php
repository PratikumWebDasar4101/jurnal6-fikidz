<?php
    require("koneksi.php");
?>
<!DOCTYPE html>
<html>
  <form method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim"></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td><input type="radio" name="kelas" value="41-01">41-01
            <input type="radio" name="kelas" value="41-02">41-02
            <input type="radio" name="kelas" value="41-03">41-03
            <input type="radio" name="kelas" value="41-04">41-04</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
      </tr>
      <!-- <tr>
        <td>Hobi</td>
        <td><input type="checkbox" name="hobi[]" value="Menggambar">Menggambar
            <input type="checkbox" name="hobi[]" value="Menulis">Menulis
            <input type="checkbox" name="hobi[]" value="Mewarnai">Mewarnai
            <input type="checkbox" name="hobi[]" value="Membaca">Membaca</td>
      </tr> -->
      <tr>
        <td>Fakultas</td>
        <td><select name="fakultas">
              <option value="FIT">FIT</option>
              <option value="FIK">FIK</option>
              <option value="FRI">FRI</option>
              <option value="FTE">FTE</option>
              <option value="FKB">FKB</option>
              <option value="FEB">FEB</option>
            </select></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Kirim"></td>
      </tr>
    </table>
  </form>
</html>

<?php
if(isset($_POST['nama'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $kelas = $_POST['kelas'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $fakultas = $_POST['fakultas'];
  $alamat = $_POST['alamat'];
  
    $sql = "INSERT INTO mahasiswa (nama, nim, kelas, jeniskelamin, fakultas, alamat) VALUES ('$nama','$nim', '$kelas', '$jeniskelamin', $fakultas','$alamat')";
    
        if (mysqli_query($conn, $sql)) {
            echo "Sukses";
        } else {
              echo "Error : ".$sql.mysqli_error($conn);
        }     
  }
?>