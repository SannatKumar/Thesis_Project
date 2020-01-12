<?php

    //Database credentials
    $servername = "localhost";
  	$dusername = "root";
  	$dpassword = "Rapassword";
  	$dbname = "raspberry_pi_data";

  	try {
      		$connect = new PDO("mysql:host=$servername;dbname=$dbname", $dusername, $dpassword);
      		// set the PDO error mode to exception
      		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      		echo "Successfully Connected to the Database";
      	}
  	catch(PDOException $e) {
      		echo "Connection failed: " . $e->getMessage();
          }
	$userQueryString = "SELECT UserInput, Results FROM nltk_results";
	$queryHandle = $connect->prepare($userQueryString);
	$queryHandle->execute();
	$row = $queryHandle->fetch();
	$user_input = $row['UserInput'];
    $results = $row['Results'];
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Web serving</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div id="header" class = "ui center aligned grid">
		<div class = "ui row">
			<h1>User Input And Machine Analysis</h1>
		</div>
	</div>

	<div class = "ui center aligned grid">
		<div id="main" class = "ui row">
			<form class = "ui form">
				User Input: <input type="text" name="user_input" value ="<?php echo htmlspecialchars($user_input); ?>"><br><br>
				Machine Analysis: <input type="text" name="machine_answer" value = "<?php echo htmlspecialchars($results); ?>"><br>
			</form>
		</div>
	</div>

	<div class = "ui center aligned grid">
		<div id="footer" class = "ui row">
			<p>Thesis Project developed for web serving.</p> 
		</div>
	</div>
	
</body>
</html>
