<?php
	$x = $_REQUEST['v']; 
?>
<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<br><br><br>
		<h1 align="center">This is page 2</h1>
		<br>

		<h3 align="center">
			This Page is Going to change in
			<span id="p" align="center"> <?php echo $x; ?> </span> Seconds</h3>
		<script>
			var v = <?php echo $x; ?>;
			setInterval( f1 , 1000 ); 			
			function f1(){
				v--;
				if(v==0) window.location.href = "page3.php?v="+<?php echo $x; ?>;
				document.getElementById('p').innerHTML = v ;
			}
		</script>
	</body>
</html>