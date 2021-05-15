<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="POST">
        <p>
            <label>Nama: </label>
            <input type="text" name="nama">
        </p>
        <p>
            <label>Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir">
        </p>
        <p>
            <label>Pekerjaan: </label>
            <select name="pekerjaan">
                <option value="-">-Pilih Pekerjaan-</option>
                <option value="mekanik">Mekanik</option>
                <option value="guru">Guru Sekolah</option>
                <option value="karyawan">Karyawan Sawasta</option>
            </select>
        </p>
        <p><input type="submit" name="kirim" value="Kirim"></p>
    </form>

    <?php 
        if(isset($_POST['kirim'])){
            if(empty($_POST['nama']) || 
                empty($_POST['tgl_lahir'] || 
                empty($_POST['pekerjaan']))){
                print "Silahkan Lengkapi Form Dengan Benar";
                }
                else{
                $nama = $_POST['nama'];
                $lahir = $_POST['tgl_lahir'];
                $pekerjaan = $_POST['pekerjaan'];
                $tgl_lahir = new DateTime($lahir);
                $hari_ini = new DateTime();
                $usia = $hari_ini->diff($tgl_lahir)->y;                    
                    switch ($pekerjaan) {
                        case 'mekanik':
                            $gaji = 4000000;
                            break;
                        case 'guru':
                            $gaji = 5000000;
                            break;
                        case 'karyawan':
                            $gaji = 4500000;
                            break;
                        
                        default:
                            $gaji = "";
                            break;
                    }            
                echo "Nama: " . $nama ;
                echo "<br>Usia: " . $usia . " tahun" ;
                echo "<br>Gaji: Rp." . $gaji ;
            }
        }
    ?>

</body>
</html>


