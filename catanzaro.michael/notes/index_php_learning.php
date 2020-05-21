<?php

// phpinfo();

echo "<div>hello world</div>";

// Variables
$a = 5;

echo $a;


// String Interpolation
echo "<div>I have $a things</div>";
echo '<div>I have $a things</div>';

?>

<hr>
<div>Here's some other stuff</div>

<?php

// PHP is a loosely typed language

// Float
$b = 0.3333;
// Integer
$b = 15;

// String
$name = "Yerguy";

// Boolean
$isYes = true;


// Math
// PEMDAS (Order of Operation)
echo (5 - 4) * 2;

// Concatenation
echo "<div>b + a" . " = c</div>";

echo "<div>$b + $a = " . ($b+$a) . "</div>";

?>

<hr>
<div>This is my name</div>
<div>
<?php

$firstname = "Hamilton";
$lastname = "Cline";
$fullname = "$firstname $lastname";
echo $fullname;

?>

<hr>

<?php

// Superglobal
// ?name=Something
echo "<div>My name is {$_GET['name']}</div>";

// ?name=Something&type=div
echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

?>

<hr>

<?php

// Array
$colors = array("red","green","blue");

echo $colors[1];

echo "
	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]
	";

echo count($colors);

?>

<hr>

<?php

// Associative Array
$colorsAssociative = [
	"red"=>"#f00",
	"green"=>"#0f0",
	"blue"=>"#00f"
];

echo $colorsAssociative['red']."<br>";

?>

<div style="color:<?= $colorsAssociative['green'] ?>">
	This text is green.
</div>

<hr>

</div>

<?php

// Casting
$c = "$a";
$d = $c*1;

$colorsObject = (object)$colorsAssociative;

// echo $colors;

echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']."<br>";
echo $colorsAssociative[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";

echo "<hr>";

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";


// Functions
function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

print_p($colors);


?>