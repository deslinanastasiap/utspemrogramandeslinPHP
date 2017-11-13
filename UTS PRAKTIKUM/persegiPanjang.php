<?php

	$p = $_GET['panjang'];
	$l = $_GET['lebar'];
	$wrn = $_GET['warna'];

	$kode_warna = UbahWarna($wrn);

	if($p && $l){
		if($p<=0){
			echo "Panjang harus lebih dari 0";
		}
		else if($l<=0){
			echo "Lebar harus lebih dari 0";
		}
		else {
			CetakPersegiPanjang($p,$l,$kode_warna);
		}
	}
	else {
		echo "Panjang atau Lebar tidak boleh Kosong!";
	}

	echo "<br><a href='input.html'>Kembali</a>";
?>

<?php


	function UbahWarna($warna)
	{
		switch ($warna) {
			case 'Putih':
				return '#ffffff';
				break;

			case 'Merah':
				return '#ec2a2a';
				break;

			case 'Hitam':
				return '#000000';
				break;

			case 'Hijau':
				return '#01ff44';
				break;

			case 'Biru':
				return '#2aece4';
				break;

			case 'Kuning':
				return '#e1ec2a';
				break;
			
			default:
				return '#ffffff';
				break;
		}
	}

	function CetakPersegiPanjang($panjang,$lebar,$warna)
	{
		echo "<table>";

			echo "<tr><th></th>";
			for($h = 1; $h<=$panjang; $h++){
					echo "<th>$h</th>";
				}
				echo "</tr>";

			for($i = 1; $i<=$lebar; $i++){
				echo "<tr><td>$i</td>";
				for($j = 1; $j<=$panjang; $j++){
					echo "<td style='border:1px solid black; min-width:30px; height:30px; background-color:$warna'></td>";
				}
				echo "</tr>";
			}
			echo "</table>";
	}

?>