<?php
	include "../connect.php";

	$username = $_POST["username"];
	$telpon = $_POST["telpon"];

	$query = "INSERT INTO dosen(username,telpon)
			  VALUES ('$username','$telpon')";

	$result = mysqli_query($connect,$query);
	$num = mysqli_affected_rows($connect);
	
	if($num > 0){
		echo "Berhasil tambah data";
	}
    else{
		echo "Gagal tambah data";
	}	
	echo "<a href='read.php'>Lihat data</a>";
?>