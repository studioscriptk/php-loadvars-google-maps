<?php 
define("API_KEY","AIzaSyBty9sjNTLRAvX9O7-LAlPyqA4Yox2Ss-M") ?>

<form action="ubicacion.php" name="cartCheckout" id="cartCheckout" method="GET">
<input type="hidden" name="latitud" id="latitud" value="">
<input type="hidden" name="longitud" id="longitud" value="">
</form>

	<script
		src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap"
		async defer></script>
	<script type="text/javascript">

			navigator.geolocation.getCurrentPosition(function(position){ 
				var currentLatitude = position.coords.latitude;
				var currentLongitude = position.coords.longitude;
				document.getElementById("latitud").value = currentLatitude;
				document.getElementById("longitud").value = currentLongitude;

			});
	</script>
<script type="text/javascript">
	
	window.onload=function(){ 
    window.setTimeout(function() { document.cartCheckout.submit(); }, 5000);
};

</script>

</body>
</html>