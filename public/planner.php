
<?php

	var_dump($_POST);
	var_dump($_GET);

?>

<!DOCTYPE html>
<html>

<h2> "TODO List"</h2>
<ul>
	<li>"Wash Stuff"</li>
	<li>"Clean Stuff"</li>
	<li>"Homework Stuff"</li>
	<li>"Tweet Stuff"</li>
	<li>"Draw Stuff"</li>
</ul>

<h1>Add an item to the list!</h1>
<form method="POST" action>
	<p>
		<input type="text" name="list_item" id="list_item" placeholder="Add New item">Add Item!</input>
	</p>

<input type="submit" value="Submit">
</form>


</html>
