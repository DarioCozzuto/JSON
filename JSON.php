<!DOCTYPE html>
<html>
<body>
<?php
//JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
//Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.


//The json_encode() function is used to encode a value to JSON format.
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);


//The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));  //return an object
var_dump(json_decode($jsonobj, true));  //return an array


$obj = json_decode($jsonobj);  //how to access to values of an object

echo $obj->Peter;//how to access to values of an object
echo $obj->Ben;//how to access to values of an object
echo $obj->Joe;//how to access to values of an object


$arr = json_decode($jsonobj, true);    //how to access to values of an array

echo $arr["Peter"];//how to access to values of an array
echo $arr["Ben"];//how to access to values of an array
echo $arr["Joe"];//how to access to values of an array
?>
</body>
</html>