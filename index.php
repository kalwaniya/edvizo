<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AJAX Search filter demo</title>
<style>
body {
padding: 10px;
}
h1 {
margin: 0 0 0.5em 0;
color: #343434;
font-weight: normal;
font-family: 'Ultra', sans-serif;
font-size: 36px;
line-height: 42px;
text-transform: uppercase;
text-shadow: 0 2px white, 0 3px #777;
}
h2 {
margin: 1em 0 0.3em 0;
color: #343434;
font-weight: normal;
font-size: 30px;
line-height: 40px;
font-family: 'Orienta', sans-serif;
}
#employees {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 12px;
background: #fff;
margin: 15px 25px 0 0;
border-collapse: collapse;
text-align: center;
float: left;
width: 700px;
}
#employees th {
font-size: 14px;
font-weight: normal;
color: #039;
padding: 10px 8px;
border-bottom: 2px solid #6678b1;
}
#employees td {
border-bottom: 1px solid #ccc;
color: #669;
padding: 8px 10px;
}
#employees tbody tr:hover td {
color: #009;
}
#filter {
float:left;
}
</style>
</head>
<body>
<h1>Demo</h1>
<table id="employees">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>products</th>
<th>brands</th>
<th>Price</th>
<th>colors</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div id="filter">
<h2>Browse products</h2>
<div>
<input type="checkbox" id="car" name="apple" value="apple">
<label for="car">Apple</label>
<input type="checkbox" id="car1" name="hp">
<label for="car">hp</label>
<input type="checkbox" id="car3" name="lenovo">
<label for="car">lenovo</label>
</div>

<h2>Brand </h2>
<div>
<input type="checkbox" id="language" name="Computer">
<label for="language">Computer</label>
<input type="checkbox" id="language2" name="Laptop">
<label for="language">Laptop</label>
<input type="checkbox" id="language3" name="pendrive">
<label for="language">pendrive</label>
</div>

<h2>Price </h2>
<div>
<input type="checkbox" id="nights" name="price1">
<label for="nights">10000</label>
<input type="checkbox" id="nights1" name="price2">
<label for="nights">20000</label>
<input type="checkbox" id="nights2" name="price3">
<label for="nights">30000</label>
</div>

</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function makeTable(data){
var tbl_body = "";
$.each(data, function() {
var tbl_row = "";
$.each(this, function(k , v) {
tbl_row += "<td>"+v+"</td>";
})
tbl_body += "<tr>"+tbl_row+"</tr>";
})
return tbl_body;
}
function getEmployeeFilterOptions(){
var opts = [];
$checkboxes.each(function(){
if(this.checked){
opts.push(this.name);
}
});
return opts;
}
function updateEmployees(opts){
$.ajax({
type: "POST",
url: "search.php",
dataType : 'json',
cache: false,
data: {filterOpts: opts},
success: function(records){
$('#employees tbody').html(makeTable(records));
}
});
}
var $checkboxes = $("input:checkbox");
$checkboxes.on("change", function(){
var opts = getEmployeeFilterOptions();
updateEmployees(opts);
});
updateEmployees();
</script>

<script>
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="apple"){
           $("#car3").css("background-color", "yellow");
        }
</script>

</body>
</html>