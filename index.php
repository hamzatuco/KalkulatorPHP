<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator.ba
	</title>
	<style>
	
		</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="stil.css">
	<link rel="shortcut icon" type="image/jpg" href="img/calc.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:#222629;">
<div class="topdiv">
<img class="img-logo" src="img/logo.png" >

	</div>
	<div class='container'>
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b><center>Dobrodošli na Kalkulator.ba</center></b></h1><br><br>






		<form method="get" action="" class="">
			<center>
			<input type="text" class='form-control' name="broj1" placeholder="Unesite 1. broj"><br>
			<input type="text" class='form-control' name="broj2" placeholder="Unesite 2. broj"><br>
			<button class='btn btn-primary' type="submit" name="add">Sabiranje</button>
			<button class='btn btn-primary' type="submit" name="sub">Oduzimanje</button>
			<button class='btn btn-primary' type="submit" name="mul">Mnozenje</button>
			<button class='btn btn-primary' type="submit" name="div">Dijeljenje</button>
			<hr>
			<button class='btn btn-primary' type="submit" name="mod">Mod</button>	
			<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>	
			<button class='btn btn-primary' type="submit" name="sin">Sin</button>	
			<button class='btn btn-primary' type="submit" name="cos">Cos</button>	
			<button class='btn btn-primary' type="submit" name="tan">Tan</button>	
			<button class='btn btn-primary' type="submit" name="log">Log</button>
			<button class='btn btn-primary' type="submit" name="log10">Log10</button>
			<button class='btn btn-primary' type="submit" name="pow">Potencija</button>
			<hr>
		

		
		</center>
		</form>
		<br>
	

	
<div class="answer">
	<center>
<?php

	if(isset($_REQUEST['add'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$zbir = $broj1+$broj2;
		echo "<b>Rezultat je : ".$zbir."</b>";
	}
	else if(isset($_REQUEST['sub'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$razlika = $broj1-$broj2;
		echo "<b>Rezultat je : ".$razlika."</b>";
	}
	else if(isset($_REQUEST['mul'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$proizvod = $broj1*$broj2;
		echo "<b>Rezultat je : ".$proizvod."</b>";
	}
	else if(isset($_REQUEST['div'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$kolicnik = $broj1/$broj2;
		echo "<b>Rezultat je : ".$kolicnik."</b>";
	}
	else if(isset($_REQUEST['mod'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$modulo = $broj1%$broj2;
		echo "<b>Rezultat je : ".$modulo."</b>";
	}
	else if(isset($_REQUEST['square-root'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$korijen = sqrt($broj1);
		echo "<b>Rezultat je : ".$korijen."</b>";
	}
	else if(isset($_REQUEST['sin'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$sinus = sin($broj1);
		echo "<b>Rezultat je : ".$sinus."</b>";
	}

	else if(isset($_REQUEST['cos'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$cosinus = cos($broj1);
		echo "<b>Rezultat je : ".$cosinus."</b>";
	}
	else if(isset($_REQUEST['tan'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$tangens = tan($broj1);
		echo "<b>Rezultat je : ".$tangens."</b>";
	}
	else if(isset($_REQUEST['log'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$logaritam = log($broj1);
		echo "<b>Rezultat je : ".$logaritam."</b>";
	}
	else if(isset($_REQUEST['log10'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$log1 = log10($broj1);
		echo "<b>Rezultat je : ".$log1."</b>";
	}
	else if(isset($_REQUEST['pow'])){
		$broj1 = (float)$_REQUEST['broj1'];
		$broj2 = (float)$_REQUEST['broj2'];
		$potencija = pow($broj1,$broj2);
		echo "<b>Rezultat je : ".$potencija."</b>";
	}

?>
</center>
</div>
<br>
<center><a href="index.php">	<button style="font-size: 20px;" class='btn btn-primary'>Očisti</button></a></center><br>
</div>
</div>
</div>
</div>
</body>
</html>