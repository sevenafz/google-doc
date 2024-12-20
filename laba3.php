<?php 
$me = [ "Name" => "Nikita", "Age" => 18]; 
$friend = ["Name" => "Egor", "Age" => 16]; 
$pet = ["Name" => "Kulibyaka", "Age" => 7]; 
 
//ФУнкция получения имени 
function GetName1($me) 
{ 
return $my_name = $me["Name"]; 
 
} 
 
function GetName2($friend) 
{ 
return $friend_name = $friend["Name"]; 
 
} 
 
function GetAge1($me) 
{ 
return $my_age = $me["Age"]; 
 
} 
 
function GetAge2($friend) 
{ 
return $friend_age = $friend["Age"]; 
} 
$array = []; 
if (GetAge1($me) > GetAge2($friend)) 
{ 
 $array[0] = GetAge1($me); 
 $array[1] = GetAge2($friend); 
 $array[2] = $pet["Age"]; 
 echo GetName1($me)."\n"; 
} 
else if (GetAge1($me) < GetAge2($friend)) 
{ 
 $array[0] = GetAge2($friend); 
 $array[1] = GetAge1($me); 
 $array[2] = $pet["Age"]; 
 echo GetName2($friend)."\n"; 
} 
else 
{ 
 $array[0] = GetAge1($me); 
 $array[1] = GetAge2($friend); 
 $array[2] = $pet["Age"]; 
 echo "Мы одногодки \n"; 
} 
 
for ($i = 0; $i < 3; $i++) 
{ 
 echo $array[$i]." "; 
} 
 
$pet_name = strlen($pet["Name"]); 
if ($pet_name < 2) echo "\n Имя питомца короткое"; 
else if ($pet_name >= 5 && $pet_name <= 10) "\n Имя питомца среднее"; 
else echo "\n Имя длинное"; 
$pet_age = $pet["Age"]; 
if ($pet_age <= 1) echo "\n Питомец маленький"; 
else echo "\n Питомец взрослый"; 
 
?>