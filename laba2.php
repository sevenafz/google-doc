<?php 
$me = [ "Name" => "Никита", "Age" => 18, "Surname" => "Полянсков"]; 
$friend = ["Name" => "Егор", "Surname" => "Рязанов", "Age" => 16]; 
$my_age = $me["Age"]; 
$friend_age = $friend["Age"]; 
if ($my_age > $friend_age) echo "Мне"." ".$my_age."\n"; 
else if ($my_age < $friend_age) echo "Другу"." ".$friend_age."\n"; 
else echo "Нам одинаково по годкам \n"; 
$MyName_len = strlen($me["Name"]); 
$FriendName_len = strlen($friend["Name"]); 
if ($MyName_len > $FriendName_len) echo "Мое имя"." ".$me["Name"]." длиннее \n"; 
else if ($MyName_len < $FriendName_len) echo "Имя друга"." ".$friend["Name"]." длинее \n"; 
else echo "Длина наших имен ".$me["Name"]." и ".$friend["Name"]." одинакова \n"; 
$day = 24; 
$k = 0; 
while ($day < 30) 
{ 
 $day++; 
 $k++; 
} 
echo "До конца месяца: ".$k." дн(я/ей)"; 
?>