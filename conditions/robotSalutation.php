<?php

// PHP program to get the  
// current date and time  
  
echo "Current date and time is :";  
  
// Store the date and time  to  
// the variable  
$myDate = date("d-m-Y H:i:s"); 
$currentTime = date("H:i:s");
  
// Display the date and time  
echo $myDate;  

//Robot Salutation code:

if ($currentTime >= "05:00" && $currentTime <= "09:00"){
    echo "<br>Good morning !";
} 
else if($currentTime >= "09:01" && $currentTime <= "12:00"){
    echo "<br>Good day !";
} 
else if($currentTime >= "12:01" && $currentTime <= "16:00"){
    echo "<br>Good afternoon !";
} 
else if ($currentTime >= "16:01" && $currentTime <= "21:00"){
    echo "<br>Good evening !";
} 
else {
    echo "<br>Good night !";
}

// display greeting according to user's age
// if age is less than 12 years old, display "Hello kiddo!"
// if age is between 12 and 18 years old, display "Hello Teenager !"
// if age is between 18 and 115 years old, display Hello Adult !"
// if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"

if (isset($_GET['age'])){
	// Form processing

}
// Form (incomplete)
?>
<form method="get" action="robotSalutation.php">
	<label for="age">Enter your age:</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
    echo "{$_GET["age"]}";
?>