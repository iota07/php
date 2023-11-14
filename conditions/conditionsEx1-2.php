<?php
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == $possible_states[0] ){
	echo "Yuk, Room is a heath hazard! Let's clean it up !";
} 
else if($room_filthiness == $possible_states[1] ){
	echo "Yuk, Room is a filthy! Let's clean it up !";
}

else if($room_filthiness == $possible_states[2] ){
    echo "Yuk, Room is a dirty! Let's clean it up !";
}
else if ($room_filthiness == $possible_states[3] ){
    echo "Your room is clean! nothing do do.";
} 
else {
	echo "<br>Your room is immaculate, wow!";
}
?>