<?php 

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    else{
        $id = "0";
    }

?>


<html>
<head>
    <meta charset="utf-8"> 
</head>
<body> 

<form  enctype="multipart/form-data" action="sender.php" method="post">
        ID: <input type="text" id="id" name="id" value="<?php echo $id; ?>" /> 
        <br>
        From: <input type="text" name="from" id="from" /> 
        <br>
        To: <input type="text" name="to" id="to" /> 
        <br>
        Subject: <input type="text" name="subject" id="subject" /> 
        <br>
        Description: <input type="text" name="description" id="description" /> 
        <br>
        Latitude: <input type="text" name="latitude" id="latitude" /> 
        <br>
        Longitude: <input type="text" name="longitude" id="longitude" /> 
        <br>
		<input type="file" name="attached_image" id="attached_image" accept="image/*" capture="camera" /> 
		<br>
        <input type="submit" value="Submit now" />
</form>
 
</body>

</html>
<script src="http://www.google.com/jsapi"></script>
<script>

window.onload = function(){ 
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(currentPositionCallback);
     } else {
        alert('The browser does not support geolocation');
     }
}

function currentPositionCallback(position) {

     // Create a new latlng based on the latitude and longitude from the user's position
     //var user_lat_long = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

     var tf_latitude = document.getElementById("latitude");
     tf_latitude.value = position.coords.latitude;
     var tf_longitude = document.getElementById("longitude");
     tf_longitude.value = position.coords.longitude;

 }
</script>

<!--
	<input type="file" id="foto" /> 
	accept="image/*" capture="camera"
	-->