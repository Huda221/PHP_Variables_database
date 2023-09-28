<?php 
$country = "Pakistan";
echo $country."<br>";
echo "pakistan is my country" . "<br>";

$university = "UAF";
echo $university . "<br>";
echo "<h1>University of Agriculture Faisalabad</h1> . <br>";

$degree = "<h1>BSIT</h1>";
echo $degree;
// array
echo "<h1>Array</h1>";
$kitchen = array("Spoons","Spices","Vegetables","Fruits");
echo "<pre>";
print_r($kitchen);
echo $kitchen[1]. "<br>";

// functions
echo "<h1>Functions</h1>";
function sub_numbers()
{
    $x = 15;
    $y = 10;
    $z = $x - $y;

    echo $z . "<br>";
}
sub_numbers();
echo "<h1>Functions</h1>";
function multiply_numbers($x,$y)
{
    $z = $x * $y;
    echo $z . "<br>";
}
multiply_numbers(10,15);
multiply_numbers(15,20);

// conditional statements

// 1- if-else statement
echo "<h1>If-Else statement</h1>";

$x=10;
$y=20;
if($x>$y)
{
    echo $x ."is greater than". $y . "<br>";
}
else
{
    echo $y ."is greater than". $x . "<br>";
}
// Another example of if- else statement
echo "<h1>Example </h1>";
$number=3;
if($number==3)
{
    echo "This part is executed if the number is 3" . "<br>";
}
else 
{
    echo "This part is executed if the number is othen than 3" . "<br>";
}

// 2- Multiple if-else statement
echo "<h1>Multiple if else Statement</h1>";
$x=10;
$y=20;
if($x>$y)
{
    echo $x ."is greater than" .$y;
}
else if($x==$y)
{
    echo "Values is same";
}
else 
{
    echo "Values is not same" . "<br>";
}

// Another example of multiple if-else statement
echo "<h1>Example 1</h1>";

$name="Huda";
if($name == "Sidra")
{
    echo "Name isnʻt matched";
}
else if($name == "Arooj")
{
    echo "Name again not matched";
}
else if($name == "Zoya")
{
    echo "Name not matched";
}
else 
{
    echo "Name is $name" . "<br>";
}
// anothe example of multiple if else statement
echo "<h1>Another example of multiple if else statement</h1>";
$marks=70;      
if ($marks<33){    
    echo "fail";    
}    
else if ($marks>=34 && $marks<50) {    
    echo "D grade";    
}    
else if ($marks>=50 && $marks<65) {    
   echo "C grade";   
}    
else if ($marks>=65 && $marks<80) {    
    echo "B grade" . "<br>";   
}    
else if ($marks>=80 && $marks<90) {    
    echo "A grade";    
}  
else if ($marks>=90 && $marks<100) {    
    echo "A+ grade";   
}  
else {    
    echo "Invalid input";    
}    

// nested if statement
echo "<h1>Nested if statement</h1>";

$firstname="Huda";
$lastname="Zahid";

if($firstname=="Huda")
{
    if($lastname=="Fatima")
    {
        echo "Lastname is Fatima";
    }
    else
    {
        echo "Lastname is $lastname" . "<br>";
    }
}
else
{
    echo "Name not matched";
}

// another example of nested if statement
echo "<h1>Another example of nested if statement</h1>";
$age=19;
$nationality="Pakistani";
if($nationality=="Indian")
{
    if($age>=18)
    {
        echo "Eligible for driving";
    }
    else
    {
        echo "Not eligible for driving";
    }

}
else
{
    echo "This person is not from Pakistan" . "<br>";
}

// Switch statement
echo "<h1>Switch Statement</h1>";
$num=20;      
switch($num){      
case 10:      
echo("number is equals to 10");      
break;      
case 20:      
echo("number is equal to 20 <br>");      
break;      
case 30:      
echo("number is equal to 30");      
break;      
default:      
echo("number is not equal to 10, 20 or 30");      
}     

// Loops
// While loops
echo "<h1>While loop</h1>";
$x=1;

while($x<=5)
{
    echo "The number is: $x <br>";
    $x++;
}
// do-while loop
echo "<h1>Do-While loop</h1>";

$x=1;

do{
    echo "The number is: $x <br>";
    $x++;
}   
while($x<=5);

// For loop
echo "<h1>For Loop</h1>";

for($x=0; $x<=10; $x++)
{
    echo "The Number is: $x <br>";
}

// Example 1
echo "<h1>Star pattern</h1>";

for($x=0;$x<=5;$x++)
{
    for($y=0;$y<=5;$y++)
    {
        echo "*";
    }
    echo "<br>";
}

echo "<h1>Example</h1>";

for($x=1;$x<=5;$x++)
{
   for($y=1;$y<=$x;$y++)
   {
    echo "*";
   }
   echo "<br>";
}
?>