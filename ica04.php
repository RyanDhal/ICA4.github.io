<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$hidden_value= $_POST["hidden_value"];
		$username= $_POST["username"];
		$pin= $_POST["pin"];
		$byte_value=$_POST["byte_value"];
		$date_value=$_POST["date_value"];
		$color_value=$_POST["color_value"];
        $travel=$_POST["travel"];
        $science_fiction=$_POST["science_fiction"];
        $acknowledge=$_POST["acknowledge"];
    }
    ?> 

<table class="table">
    <tr>
        <th colspan = "3">Post Parameters</th> 
    </tr>
    <thead>
        <th>Name</th>
        <th>Value</th>
        <th>Status</th>
        </thead>

    <tbody>
    <tr>
        <td><?php echo nl2br("Hidden Value: ". $hidden_value."\n");?></td>
    </tr>
	<tr>
        <td><?php echo nl2br("Username: ". $username."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("PIN: ". $pin."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Byte_Value: ". $byte_value."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Date_Value: ". $date_value."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Color_Value: ". $color_value."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Travel: ". $travel."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Science_Fiction: ". $science_fiction."\n");?></td>
    </tr>
    <tr>
        <td><?php echo nl2br("Acknowledge: ". $acknowledge."\n");?></td>
    </tr>
    </tbody>
</table>    
</body>





</html>