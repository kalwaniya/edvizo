<?php
$pdo = new PDO('mysql:host=localhost;dbname=hanuplus_ci', 'root', '');
//$select = 'SELECT *';
$select = 'SELECT name,	price,img_name ';
$from = ' FROM products';
$where = ' WHERE TRUE';
$opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');
/*
if (in_array("hp", $opts)){
$where .= " AND brands = 'hp'";
}
if (in_array("lenovo", $opts)){
$where .= " AND brands = 'lenovo'";
}
if (in_array("apple", $opts)){
$where .= " AND brands = 'Apple'";
}
if (in_array("Computer", $opts)){
$where .= " AND products = 'Computer'";
}
if (in_array("Laptop", $opts)){
$where .= " AND products = 'Laptop'";
}
if (in_array("pendrive", $opts)){
$where .= " AND products = 'pendrive'";
}
if (in_array("price1", $opts)){
$where .= " AND price = '10000'";
}
if (in_array("price2", $opts)){
$where .= " AND price = '20000'";
}
if (in_array("price3", $opts)){
$where .= " AND price = '30000'";
}
*/

if (in_array("hp", $opts)){
$where .= " AND brands = 'T-shirt'";
}
if (in_array("lenovo", $opts)){
$where .= " AND brands = 'shirt'";
}
if (in_array("apple", $opts)){
$where .= " AND brands = 'jeans'";
}
if (in_array("Computer", $opts)){
$where .= " AND products = 'red'";
}
if (in_array("Laptop", $opts)){
$where .= " AND products = 'gray'";
}
if (in_array("pendrive", $opts)){
$where .= " AND products = 'black'";
}
if (in_array("price1", $opts)){
$where .= " AND price = '100'";
}
if (in_array("price2", $opts)){
$where .= " AND price = '200'";
}
if (in_array("price3", $opts)){
$where .= " AND price = '300'";
}

if (in_array("size1", $opts)){
$where .= " AND size = 'Large'";
}

if (in_array("size2", $opts)){
$where .= " AND size = 'Medium'";
}
if (in_array("size3", $opts)){
$where .= " AND size = 'Small'";
}


$sql = $select . $from . $where;
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);
?>
