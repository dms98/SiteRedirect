<?php

$par_par = $_REQUEST["par"];
$par_go = $_GET["go"];


include 'vai.php';


if ($par_go=="specialCode") { 
        echo '<HTML><BODY>';
        echo '<HR>';
	foreach($vai as $x => $x_value) {
		echo 'Key= &nbsp;' . $x . ', Value= &nbsp;' . $x_value;
		echo '<br>';
	}
        echo '<HR>';
        echo '</BODY></HTML>';
        $par_go="";
        die;
}

$par_go = strtolower($par_go);

if ($par_go!="") { 
	$vai_para = "Location: " . $vai[$par_go];
	header($vai_para);
	die;
	}
	

if ($par_go=="a") {
	//header("Location: http://www.mp.go.gov.br");
	echo 'par_par: ' . $par_par . '<br>';
	echo 'get-par: ' . $_GET["par"] . '<br>';
	echo 'par_go: ' . $par_go . '<br>';
	echo 'get_go: ' . $_GET["go"] . '<br>';
	echo '<HR>vai para: ' . $vai[$par_go] . '<BR>';
	
	if ($par_par=="specialCode") { 
		foreach($vai as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
	}
}


?>