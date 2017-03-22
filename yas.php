<?php
	/**
	 *
	 * Doğduğundan Beri
	 *
	 * @author  Uğur KILCI
	 * @Web 	ugurklc.blogspot.com
	 * @twitter ugur2nd
	 * @github  ugurkilci
	 * @youtube dusunenadamugur
	 *
	 */
?>
<a href="https://github.com/ugurkilci/dogdugundan-beri" target="_blank">GitHub!</a><hr>
<?php
	if ($_POST) {
		$gun 		= $_POST["gun"]; // doğduğumuz gün
		$ay 		= $_POST["ay"]; // doğduğumuz ay
		$yil 		= $_POST["yil"]; // doğduğumuz yıl

		$syil 		= date("Y") - $yil; // toplam yıl
		$say  		= $syil * 12 - $ay; // toplam ay
		$shafta 	= $say * 4; // toplam hafta
		$sgun 		= $shafta * 7 - $gun; // toplam gün
		$ssaat  	= $sgun * 24 + date("H"); // toplam saat
		$sdk 		= $ssaat * 60 + date("i"); // toplam dakika
		$ssaniye 	= $sdk * 60 + date("s"); // toplam saniye
		$ssalise 	= $ssaniye * 60; // toplam salise

		echo "
			<h1>
				Doğduğundan Beri,
			</h1>
			<h3>
				<em>$syil</em> yıl geçmiş,<br />
				<em>$say</em> ay geçmiş,<br />
				<em>$shafta</em> hafta geçmiş,<br />
				<em>$sgun</em> gün geçmiş,<br />
				<em>$ssaat</em> saat geçmiş,<br />
				<em>$sdk</em> dakika geçmiş,<br />
				<em>$ssaniye</em> saniye geçmiş,<br />
				<em>$ssalise</em> salise geçmiş.<br /><br />
				Aslında baya yaşlısın! :D
			</h3>
		";
	}else{
		echo "
			<h1>
				Doğduğundan Beri Kaç Zaman Geçti?
			</h1>
		";
	}
?>
<form action="" method="POST">
	<strong>Gün:</strong><br /><input type="number" name="gun" value="17"><br />
	<strong>Ay:</strong><br /><input type="number" name="ay" value="7"><br />
	<strong>Yıl:</strong><br /><input type="number" name="yil" value="1997">
	<br /><br />
	<input type="submit" value="Hesapla!">
</form>