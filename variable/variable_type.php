<?php 
    $name = 'Han'; 
        echo '<p>'."Hi my name is {$name}". '</p>';
    $age = '40';
        echo '<p>'."I am {$age} old.".'</p>';
    $eyecolor = 'dark brown';
        echo '<p>'."My eyes are {$eyecolor}". '</p>';
    $familymember = array("Toumkham","Thavixay","Chantaphone","Amphayvone","Sayaphoum","Varouny");

        foreach($familymember as $familymember){
            echo $familymember . '<br>';
        }
    $hungry = true;
        echo '<p>'." 1 = true, 0 = false / Am I hungry?: {$hungry}".'</p>'

?>
