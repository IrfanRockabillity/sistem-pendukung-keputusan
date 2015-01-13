<?php include "header.php"; ?>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1>Sistem Pendukung Keputusan</h1>
			</div>
			<div class="col-md-3">
				<?php include "nav.php"; ?>
			</div>
			<div class="col-md-9">
				Selamat Datang !!! <br><br>
				<?php
					$metode = isset($_GET['m']) ? $_GET['m'] : "";  
					switch($metode) {
						case "saw": include "metode/saw.php"; break;
						case "wp": echo "Under Construction !!! thx"; break;
						case "topsis": echo "Under Construction !!! thx"; break;
						case "ahp": echo "Under Construction !!! thx"; break;
					}
				?>
			</div>
			<div class="col-sm-12">                                                               
				<p>&copy; Irfan</p>                  
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>
