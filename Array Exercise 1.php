<!DOCTYPE html>
<html>
<head>
<titile>Weather</title>
</head>

<body>
<h1>Weather</h1>
<div>
<?php
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
  foreach ($weather as $value) {
        echo $value . ' ';
    }
?>
</div>
</body>
</html>
