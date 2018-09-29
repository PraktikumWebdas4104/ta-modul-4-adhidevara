<?php
if (isset($_POST['submit'])) {
		$usr = $_POST['usr'];
		$pass = $_POST['pass'];

		$admin = array('usr'  => 'admin',
					   'pass' => 'admin123');

		if ($usr==$admin['usr'] && $pass==$admin['pass']) {
			echo "<h1>LOGIN SUKSES</h1> Hai, <b>".$usr."</b> Selamat Datang!~<br>";
?>
<form method="POST" align='center'>
	<br><br><b>Pilih Genre Film Favorit :</b><br><br>
	<table align="center">
		<tr>
			<td><input type="checkbox" name="film[]" value="Horror">Horror</td>
			<td><input type="checkbox" name="film[]" value="Action">Action</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="film[]" value="Anime">Anime</td>
			<td><input type="checkbox" name="film[]" value="Thriller">Thriller</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="film[]" value="Animasi">Animasi</td>
		</tr>
	</table>

	<br><br><b>Pilih Tujuan Wisata Favorit Travelling :</b><br><br>
	<table align="center">
		<tr>
			<td><input type="checkbox" name="travel[]" value="Bali">Bali</td>
			<td><input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan</td>
			<td><input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo</td>
		</tr>
	</table>
	<br><input type="submit" name="submit2" value="Kirim">
</form>

<?php
		}
		else{
			echo "<h1>USERNAME / PASSWORD SALAH";
		}
	}
	if (isset($_POST['submit2'])) {
			$dataFilm = $_POST['film'];
			$dataTravel = $_POST['travel'];

			echo "<b>Film Favorit Anda :</b><br>";
			foreach ($dataFilm as $film) {
				echo "◄. ".$film."<br>";
			}

			echo "<br><b>Tujuan Travelling Favorit Anda :</b><br>";
			foreach ($dataTravel as $travel) {
				echo "◄. ".$travel."<br>";
			}
	}
?>
