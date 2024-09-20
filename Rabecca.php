<?php
function name(){
    $my_name="Ayebazibwe Rabecca";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=01/01/2002;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="Ntugamo Rwentobo Rwahi Rukiiri";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2002)." years old");



?>