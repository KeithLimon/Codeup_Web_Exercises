
<?php

	var_dump($_POST);
	var_dump($_GET);

?>

<html>
<head>
		<title>My First Form</title>
</head>
<body>
	<form method="GET">
		<p>
			<label for="first_name">First Name</label>
			<input type="text" name="fist_name" id="fist_name" placeholder="First"/>
		</p>
		<p>
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" id="last_name" placeholder="Last"/>
		</p>
		<!-- <input type="submit" value="Send"/> -->
		<button type="submit">Do not Press</button>
	
</form>
<h2>eMail</h2>
	
<form method= "POST">
		<input type="email" name="to" value="" placeholder="Who to eMail?"><br>
		<textarea name="body" placeholder="eMail Body"></textarea><br>	
	
	<input type="checkbox" id="save_copy" name="save_copy" value='yes' checked> Do you want to save a copy? <br>
<button type="submit">Say it!</button>
</form>


<h2>Multiple Choice Test</h2>

<p>What is your favorite color?</p>
<form method = "POST">
	<label>
			<input type="radio" id="color1" name="color" value="red">Red</label>
			<input type="radio" id="color2" name="color" value="Yellow">Yellow</label>
			<input type="radio" id="color3" name="color" value="Blue-no! YEELLLLLLLLLLLLOOOOOOOOWWWWWWWW">Blue</label>
			<input type="radio" id="color4" name="color" value="purple">Purple</label>
		<button type="submit">Done</button>
	</label>
</form>

<p>Is coding hard?</p>
<form method = "POST">
	<label>
			<input type="checkbox" id="response1" name="rsponse[]" value="yes" checked>Yes</lable><br>
			<input type="checkbox" id="response2" name="rsponse[]" value="no">No</lable><br>
			<input type="checkbox" id="response3" name="rsponse[]" value="Yes and tears">Yes, and it made me cry</lable><br>
		<button type="submit">Done</button>
	</label>
</form>

<h2>"Select Testing"</h2>
<form method = "post">
	<label for="select testing"> Select your test answer: </label>
	<select id="select testing" name="select testing">
			<option value='yes'>Yes</option>
			<option value='no' selected>No</option>
			<option value='maybe' selected>Maybe</option>
	</select>
	</label>

	<!-- <button type="submit">Done</button> -->
	<input type="submit" value="Done">

</form>



</body>
</html>