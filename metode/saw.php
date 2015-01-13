<?php
    $v1=0;
    $v2=0;
    $v3=0;

    $w1 = isset($_POST['w1'])?$_POST['w1']:0;
    $w2 = isset($_POST['w2'])?$_POST['w2']:0;
    $w3 = isset($_POST['w3'])?$_POST['w3']:0;
    $w4 = isset($_POST['w4'])?$_POST['w4']:0;
    $w5 = isset($_POST['w5'])?$_POST['w5']:0;
		
    $k1a1 = isset($_POST['k1a1'])?$_POST['k1a1']:0;
    $k1a2 = isset($_POST['k1a2'])?$_POST['k1a2']:0;
    $k1a3 = isset($_POST['k1a3'])?$_POST['k1a3']:0;
		
    $k2a1 = isset($_POST['k2a1'])?$_POST['k2a1']:0;
    $k2a2 = isset($_POST['k2a2'])?$_POST['k2a2']:0;
    $k2a3 = isset($_POST['k2a3'])?$_POST['k2a3']:0;
		
    $k3a1 = isset($_POST['k3a1'])?$_POST['k3a1']:0;
    $k3a2 = isset($_POST['k3a2'])?$_POST['k3a2']:0;
    $k3a3 = isset($_POST['k3a3'])?$_POST['k3a3']:0;
		
    $k4a1 = isset($_POST['k4a1'])?$_POST['k4a1']:0;
    $k4a2 = isset($_POST['k4a2'])?$_POST['k4a2']:0;
    $k4a3 = isset($_POST['k4a3'])?$_POST['k4a3']:0;
		
    $k5a1 = isset($_POST['k5a1'])?$_POST['k5a1']:0;
    $k5a2 = isset($_POST['k5a2'])?$_POST['k5a2']:0;
    $k5a3 = isset($_POST['k5a3'])?$_POST['k5a3']:0;
		
    $c1 = max($k1a1,$k1a2,$k1a3);
    $c2 = max($k2a1,$k2a2,$k2a3);
    $c3 = max($k3a1,$k3a2,$k3a3);
    $c4 = min($k4a1,$k4a2,$k4a3);
    $c5 =  min($k5a1,$k5a2,$k5a3);
		
    if($submit = isset($_POST['submit'])?$_POST['submit']:"") {
	$r1c1 = $k1a1/$c1;
	$r1c2 = $k2a1/$c2;
	$r1c3 = $k3a1/$c3;
	$r1c4 = $c4/$k4a1;
	$r1c5 = $c5/$k5a1;
			
	$r2c1 = $k1a2/$c1;
	$r2c2 = $k2a2/$c2;
	$r2c3 = $k3a2/$c3;
	$r2c4 = $c4/$k4a2;
	$r2c5 = $c5/$k5a2;
			
	$r3c1 = $k1a3/$c1;
	$r3c2 = $k2a3/$c2;
	$r3c3 = $k3a3/$c3;
	$r3c4 = $c4/$k4a3;
	$r3c5 = $c5/$k5a3;
		
	$v1 = ($w1*$r1c1)+($w2*$r1c2)+($w3*$r1c3)+($w4*$r1c4)+($w5*$r1c5);
	$v2 = ($w1*$r2c1)+($w2*$r2c2)+($w3*$r2c3)+($w4*$r2c4)+($w5*$r2c5);
	$v3 = ($w1*$r3c1)+($w2*$r3c2)+($w3*$r3c3)+($w4*$r3c4)+($w5*$r3c5);						
    }

?>
    <table border="1" class="table table-bordered table-striped table-hover">
        <tr>
	    <th>Lokasi</th>
	    <th>Keterangan</th>
	    <th>Nilai</th>
	</tr>
	<tr>
	    <td>A1</td>
	    <td>Janti</td>
	    <td><?php echo $v1; ?></td>
	</tr>
	<tr>
	    <td>A2</td>
	    <td>Babarsari</td>
	    <td><?php echo $v2; ?></td>
	</tr>
	<tr>
            <td>A3</td>
	    <td>Gejayan</td>
	    <td><?php echo $v3; ?></td>
	</tr>								
    </table>
    <br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<table border="1" class="table table-bordered table-striped table-hover">
	    <tr>
		<th>Kriteria</th>
		    <th>Keterangan</th>
		    <th>Satuan</th>
		    <th>Kategori</th>
		    <th>Nilai W</th>
	    </tr>
	    <tr>
		<td>C1</td>
		<td>Jarak dengan jalan raya</td>
		<td>KM</td>
		<td>Keuntungan</td>
		<td><input type="text" name="w1"size="3" required="required"/></td>
	    </tr>
	    <tr>
		<td>C2</td>
	    	<td>Populasi mahasiswa di sekitar lokasi</td>
		<td>Orang/Km2</td>
		<td>Keuntungan</td>
		<td><input type="text" name="w2" size="3" required="required"/></td>
	    </tr>
	    <tr>
		<td>C3</td>
		<td>Jarak dari kampus</td>
		<td>Orang/Km2</td>
		<td>Keuntungan</td>
		<td><input type="text" name="w3" size="3" required="required"/></td>
	    </tr>
	    <tr>
		<td>C4</td>
		<td>Jarak dengan pasar terdekat</td>
		<td>Km</td>
		<td>Biaya</td>
		<td><input type="text" name="w4" size="3" required="required"/></td>
	    </tr>
	    <tr>
		<td>C5</td>
		<td>Harga tanah lokasi</td>
		<td>x 1000 Rp/m2</td>
		<td>Biaya</td>
		<td><input type="text" name="w5" size="3" required="required"/></td>
	    </tr>	    
        </table>
        <br>
	<table border="1" class="table table-bordered table-striped table-hover">
	    <tr>
		<th rowspan="2">Alternatif</th>
		<th colspan="5">Kriteria</th>
	    </tr>
	    <tr>
		<th>C1</th>
		<th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
	    </tr>	
	    <tr>
		<td>A1</td>
		<td><input type="text" name="k1a1" size="3" required="required"/></td>
		<td><input type="text" name="k2a1" size="3" required="required"/></td>
		<td><input type="text" name="k3a1" size="3" required="required"/></td>
		<td><input type="text" name="k4a1" size="3" required="required"/></td>
		<td><input type="text" name="k5a1" size="3" required="required"/></td>
	    </tr>
	    <tr>
		<td>A2</td>
		<td><input type="text" name="k1a2" size="3" required="required"/></td>
		<td><input type="text" name="k2a2" size="3" required="required"/></td>
		<td><input type="text" name="k3a2" size="3" required="required"/></td>
		<td><input type="text" name="k4a2" size="3" required="required"/></td>
		<td><input type="text" name="k5a2" size="3" required="required"/></td>
	    </tr>	
	    <tr>
		<td>A3</td>
		<td><input type="text" name="k1a3" size="3" required="required"/></td>
		<td><input type="text" name="k2a3" size="3" required="required"/></td>
		<td><input type="text" name="k3a3" size="3" required="required"/></td>
		<td><input type="text" name="k4a3" size="3" required="required"/></td>
		<td><input type="text" name="k5a3" size="3" required="required"/></td>
	    </tr>					
	</table>
        <input type="submit" name="submit" value="Hitung"/>
        <input type="reset" name="cancel" value="Batal"/>
    </form>