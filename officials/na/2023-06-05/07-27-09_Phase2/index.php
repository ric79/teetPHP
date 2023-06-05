<html>
<head>
<title>PHP Test</title>
</head>
<body>

INIZIO
<br>

<?php

echo "PATH:<br>" . getcwd() . "<br>";

$arr = array("./steps/01_check_artifact/ova-pr-na-app01.OK.html", "./steps/01_check_artifact/ova-pr-na-app01.ERR.html", "./steps/01_check_artifact/ova-pr-na-app02.OK.html", "./steps/01_check_artifact/ova-pr-na-app02.ERR.html", "./steps/02_stop_services/ova-pr-na-app01.OK.html", "./steps/02_stop_services/ova-pr-na-app01.ERR.html", "./steps/02_stop_services/ova-pr-na-app01.OK.html", "./steps/02_stop_services/ova-pr-na-app02.ERR.html");

foreach ($arr as &$value) {
   if (file_exists($value)) {
      echo "<a href='$value'>$value</a><br>" . PHP_EOL;
   }
   else {
    echo "KO $value <br>" . PHP_EOL;
   }
}

?>
<br>
FINE

</body>
</html>
