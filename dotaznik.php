<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "logotrop";
$password = "Imthjjdn222333";
$dbname = "tomellis";
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connection_error) {
    die("Connection Failed: " .$conn->connection_error);
	
	// define variables and set to empty values
$q1Err = $q2Err = $q3Err = $q4Err = $q5Er = "";
$nick = $q1 = $q2 = $q3 = $q4 = $q5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q1"])) {
    $q1Err = "Tahle otazka je povinna";
  } else {
    $q1 = test_input($_POST["q1"]);
  }
	
	if (empty($_POST["q2"])) {
    $q2Err = "Tahle otazka je povinna";
  } else {
    $q2 = test_input($_POST["q2"]);
  }
	
	if (empty($_POST["q3"])) {
    $q3Err = "Tahle otazka je povinna";
  } else {
    $q3 = test_input($_POST["q3"]);
  }
	
	if (empty($_POST["q4"])) {
    $q4Err = "Tahle otazka je povinna";
  } else {
    $q4 = test_input($_POST["q4"]);
  }
	
	if (empty($_POST["q5"])) {
    $q5Err = "Tahle otazka je povinna";
  } else {
    $q5 = test_input($_POST["q5"]);
  }
  
  if (empty($_POST["nick"])) {
    $nick = "veselykralicek";
  } else {
    $website = test_input($_POST["nick"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}


?>
<html lang="cs-CZ">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Marek Dobes">
        <meta name="description" content="Tom Ellis Stranka">
        <link rel="icon" href="icona.png" />
        <title>Tom Ellis</title>
        <link rel="stylesheet" href="styl.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="navigace.js"></script>
    </head>
    <body id="blok">
        
        <h1>Tom Ellis</h1>
            <div class="nav" id="navigace">
                <a href="index.php">hlavní</a>
                <a href="zivot.html">život</a>
                <a href="kariera.html">Kariéra</a>
                <a href="serialy.html">Seriály</a>
                <a href="dotaznik.php">Dotazník</a>
				<a href="javascript:void(0);"  class="icon" onclick="myFunction()">&#9776;
            </div>
        <h2>Tohle je fanpage Velšského herce Toma Ellise</h2>

    <div>
     <h2>Anonymní dotazník</h2>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Jak jste se dozvěděli o této stránce?</h3>
        <input type="radio" name="q1" id="q1-A" value="A" />
        <label for="q1A">A) Náhodou </label>

        <input type="radio" name="q1" id="q1-B" value="A" />
        <label for="q1B">B) Náhodou </label><br>

        <input type="radio" name="q1" id="q1-C" value="A" />
        <label for="q1C">C) Byl jsem donucen v PVY </label>
		<span class="error">* <?php echo $q1Err;?></span>
		<br>
			 
        <h3>Jaká role proslavila Toma Ellise?</h3>
        <input type="radio" name="q2" id="q2-A" value="A" />
        <label for="q2A">A) Sauron </label><br>

        <input type="radio" name="q2" id="q2-B" value="B" />
        <label for="q2B">B) Soudkyně Barbara </label><br>

        <input type="radio" name="q2" id="q2-C" value="C" />
        <label for="q2C">C) Lucifer </label>
		<span class="error">* <?php echo $q2Err;?></span>
		<br>
			 
        <h3>Kdy se Tom Ellis narodil?</h3>
        <input type="radio" name="q3" id="q3-A" value="A" />
        <label for="q3A">A) MCMLOXVI </label><br>

        <input type="radio" name="q3" id="q3-B" value="B" />
        <label for="q3B">B) MQMLXXVII </label><br>

        <input type="radio" name="q3" id="q3-C" value="C" />
        <label for="q3C">C) MCMLXXVIII </label>
		<span class="error">* <?php echo $q3Err;?></span>
		<br>
			 
        <h3>Jak se Tom Ellis jmenuje?</h3>
        <input type="radio" name="q4" id="q4-A" value="A" />
        <label for="q4A">A) Veselykralicek1 </label><br>

        <input type="radio" name="q4" id="q4-B" value="B" />
        <label for="q4B">B) Tom Ellis duh.. </label><br>

        <input type="radio" name="q4" id="q4-C" value="C" />
        <label for="q4C">C) Tom Elvis </label>
		<span class="error">* <?php echo $q4Err;?></span>
		<br>
			 
        <h3>Tom Ellis si zahrál v seriálu Dr. Who</h3>
        <input type="radio" name="q5" id="q5-A" value="A" />
        <label for="q5A">A) ano </label><br>

        <input type="radio" name="q5" id="q5-B" value="B" />
        <label for="q5B">B) ne </label><br>

        <input type="radio" name="q5" id="q5-C" value="C" />
        <label for="q5C">C) možná, ale kdo to má vědět </label>
		<span class="error">* <?php echo $q5Err;?></span>
		<br>
		<br>
            *Nick: <input type="text" name="nick" placeholder="veselykralicek"><br>
            <input type="submit" value="Odeslat" />
                </form>
     <p>*Nepovinné</p>
     
     
     </div>
    <br>
    <br>
    <br>
    
    
    <footer>

        <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fgolovan.jecool.net%2F"><h4>Validator</h4></a>
        <ul>
        <li><a href="https://en.wikipedia.org/wiki/Tom_Ellis_(actor)">Wikipedia link</a></li>
        <li><a href="http://www.csfd.cs-CZ/tvurce/15112-tom-ellis/">CSFD bio</a></li>
        </ul>
    <b>Více informací na <a href="zivot.html">život</a></b>

    </footer>
    </body>
    
</html>