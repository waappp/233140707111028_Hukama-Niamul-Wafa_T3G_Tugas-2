<?php
    if($_POST){
        $nama=$_POST['nama'];
        $nim=$_POST['nim'];
        $email=$_POST['email'];
        $kelas=$_POST['kelas'];
        $saran=$_POST['saran'];
        if(empty($nama)){
            echo "<script>alert('nama kategori tidak boleh kosong');location.href='index.php'</script>";
        }
        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into data_form (nama, nim, email, kelas, saran)
            value ('".$nama."','".$nim."','".$email."','".$kelas."', '".$saran."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='index.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='index.php';</script>";
            }
        }
    }
?>