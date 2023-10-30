<?php 
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

// anonymous function

$anony = function(){
    echo "Hello I am anonymous function";
};

$anony();

$arr = ['min', 'khant', 19];

?>