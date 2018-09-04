<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AJAX Search filter demo</title>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}

body {
padding: 10px;
  width: 950px;
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
float: right;
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
<h1>Shop</h1>
<table id="employees">
<thead>
<tr>
<th>shows products</th>
<!--<th>Name</th>
<th>products</th>
<th>brands</th>
<th>Price</th>
<th>colors</th>-->
</tr>
</thead>
<tbody>
</tbody>
</table>
<div id="filter">


<h3 class="text-center text-success text-uppercase animateuse">Color </h3>
<div>
<input type="radio" id="language" name="brand" value="Computer">
Red<br/>
<input type="radio" id="language2" name="brand" value="Laptop">
Gray<br/>
<input type="radio" id="language3" name="brand" value="pendrive">
Black
</div>

<h3 class="text-center text-success text-uppercase animateuse">Type</h3>
<div>
 <input type="radio" name="apple" id="car" value="apple">Jeans<br/>
  <input type="radio" name="apple" id="car1" value="hp">T-shirt<br/>
  <input type="radio" name="apple" id="car3" value="lenovo">Shirt
</div>

<h3 class="text-center text-success text-uppercase animateuse">Price </h3>
<div>
<input type="radio" id="nights" name="price" value="price1">
100<br/>
<input type="radio" id="nights1" name="price" value="price2">
200<br/>
<input type="radio" id="nights2" name="price" value="price3">
300
</div>

<h3 class="text-center text-success text-uppercase animateuse">Size </h3>
<div>
<input type="radio" id="night" name="size" value="size1">
Large<br/>
<input type="radio" id="night1" name="size" value="size2">
Medium<br/>
<input type="radio" id="night2" name="size" value="size3">
Small
</div>




</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function makeTable(data){                   // create table get data from database
var tbl_body = "";                          // table body
$.each(data, function() {                   // table data
var tbl_row = "";
$.each(this, function(k , v) {
  //  alert(k+" "+v);
    if(k=="img_name")
    {
     tbl_row +=   "<div style='margin:10px;float:left;'><img src='tees/"+v+"' width=100 height=100><br>";
     
    }
    if(k=="name")
    {
     tbl_row +=   v+"<br>";
    }
    if(k=="price")
    {
     tbl_row +=   v+"</div>";
    }
    
})
tbl_body += tbl_row;
})
return tbl_body;
}
function getEmployeeFilterOptions(){     // get filter options value
var opts = [];
$checkboxes.each(function(){             // this function select when radio button is clicked
if(this.checked){
opts.push(this.value);                 // get check box values
}
});
return opts;
}
function updateEmployees(opts){        // update the filter using ajax
$.ajax({
type: "POST",                          //       POST method
url: "search.php",                      // search. page send data using json
dataType : 'json',
cache: false,
data: {filterOpts: opts},
success: function(records){
  //  alert(records);
$('#employees tbody').html(makeTable(records));
}
});
}
var $checkboxes = $("input:radio");          // check radio button is clicked
$checkboxes.on("change", function(){
var opts = getEmployeeFilterOptions();    // update the database 
updateEmployees(opts);
});
updateEmployees();
</script>

</body>
</html>
