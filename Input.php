<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $nim = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $nim = test_input($_POST["nim"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Validasi Data Mahasiswa Unisbank</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nama: <input type="text" name="nama">
  <br><br>
  NIM: <input type="text" name="nim">
  <br><br>
  Contoh Input NIM = "11.23.11.1111"
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Nama: ";
echo $nama;
echo "<br>";
echo "NIM: ";
echo $nim;
echo "<br>";
echo "Jumlah Digit NIM: ";
echo strlen ("$nim");
echo "<br>";
echo "Angkatan Tahun: 20";
echo substr ("$nim",0,2);
echo "<br>";
echo "Kode Fakusltas/Prodi: ";
echo substr ("$nim",3,5);
echo "<br>";
echo "Fakultas: ";
$fakprod = substr($nim,3,5);
if ($fakprod == "01.53") {
	echo "FTII";
	echo "<br>";
	echo "Prodi: ";
	echo "Teknik Informatika";
}	elseif ($fakprod == "01.55") {
	echo "FTII";
	echo "<br>";
	echo "Prodi: ";
	echo "Sistem Informasi";
}	elseif ($fakprod == "01.51") {
	echo "FTII";
	echo "<br>";
	echo "Prodi: ";
	echo "Teknik Industri";
}	elseif ($fakprod == "01.85") {
	echo "FTII";
	echo "<br>";
	echo "Prodi: ";
	echo "Magister Teknologi Informasi";
}	elseif ($fakprod == "02.51") {
	echo "FHB";
	echo "<br>";
	echo "Prodi: ";
	echo "Ilmu Hukum";
}	elseif ($fakprod == "02.52") {
	echo "FHB";
	echo "<br>";
	echo "Prodi: ";
	echo "Sastra Inggris";
}	elseif ($fakprod == "05.51") {
	echo "FEB";
	echo "<br>";
	echo "Prodi: ";
	echo "Manajemen";
}	elseif ($fakprod == "05.52") {
	echo "FEB";
	echo "<br>";
	echo "Prodi: ";
	echo "Akuntansi";
}	elseif ($fakprod == "08.31") {
	echo "VOKASI";
	echo "<br>";
	echo "Prodi: ";
	echo "Manajemen Informatika";
}	elseif ($fakprod == "08.34") {
	echo "VOKASI";
	echo "<br>";
	echo "Prodi: ";
	echo "Keuangan Perbankan";
}	elseif ($fakprod == "08.32") {
	echo "VOKASI";
	echo "<br>";
	echo "Prodi: ";
	echo "Perhotelan";
}	else {
	echo "Maaf Tidak Ditemukan";
}
?>
</body>
</html>