<?php


//Php loops

#There are four types of loops
//1.while;loops through a block of code as long as the specified condition is true
//2.do...while;loops through the block of code ONCE and then repeats the loop AS LONG AS the specified condition is true
//3.for
//4.foreach

#syntax
#while loop
/*
while(condition){
    code to be executed;
}
*/

$x = 0;

while ($x < 10){
    echo $x."Hello World <br>";
    echo"<br>";
    $x++;

}

/*$y = 1;
$z = $y % "3" ;
while($y < 10 and $z == 0){
    if($y % 3 == 0 )
    {echo "Fizz <br>";
    echo"<br>";}

}*/





#do..,while loop
/*
//NOTE that the code is ran first
 do{
    code to execute
}while(condition is true);

  */
do{
    echo "hello world <br>";
    $x++;
}while($x < 10);




#for loop
//execute a block of code for a specified number of times.
#syntax
/*
 * for(init counter; test counter; increment counter){
    code to execute;
}
 */

for($y = 0; $y <10; $y++){
    echo $y."hello world <br>";
    echo"<br>";
}




#foreach loop
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array

#syntax
/*
foreach($array as $value){
    code to execute;}
*/

$languages = array("html","css","bootstrap","Php");

foreach($languages as $language) {
    echo "$language.<br><br>";
}

$n = 0;

while ($n <= 50){
    if($n % 2  == 0 and $n % 3 == 0 and $n !=0){
        echo "$n is divisible by both 2 & 3<br>";
    }elseif($n % 2 == 0 and $n != 0){
        echo "$n is divisible by 2 <br>";
    }elseif($n % 3 == 0 and $n !=0){
        echo "$n is divisible by 3<br>";
    }else{
        echo $n;
        echo "<br>";
    }
    $n++;
}
