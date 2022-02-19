<?php 
  $weather = "";
  $error = "";

  $urlContent = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_POST['city']."&units=metric&appid=815391c078d1740b4d6d0ad3e80cb1c0");
  $forecastArray = json_decode($urlContent, true);

  if (isset($_POST['city'])) {
     if ($forecastArray["cod"] == 200) {
         $weather = " the weather in ".$_POST['city']." is ".$forecastArray["main"]["temp"]."&#8451;"." the wind speed is ".$forecastArray["wind"]["speed"]." m/s ".$forecastArray["weather"][0]["description"];
     }else {
        $error = " bunday shahar topilmadi";
     }
 }

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<title>Document</title>
 </head>
 <body>
   <form> <div class="discon">
   	<div class="bacc">
   		<center><h1 class="well">Weather in the City</h1></center>
   		<p class="citys"> Input a city name</p>

   		<div class="inp">
   			<input type="text" name="city" class="inp_city" placeholder=" enter your city name">
   		</div>
   		<div class="sub">
   			<input type="submit" name="submit" class="inp_sub" value=" enter ">
   		</div>
   	</div>
   	<div>
   		<?php 
        if ($weather) {
        	echo '<div class="alert alert-succes " role="alert">".$weather."</div>';
        }else if ($error) {
        	echo '<div class="alert alert-danger " role="alert">.$error."</div>';
        }

   		 ?>
   	</div>
   </div>
</form>
 </body>
 </html>