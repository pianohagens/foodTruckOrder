<!DOCTYPE html>
<html>
<head>
<title>Food Truck Order Form</title>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet" />

</head>
   
<body> <!-- checks for cookies here -->

    <img src="img/food-truck.png">
    
    <div id="welcome">
     <h1>Welcome to <b style="color:blue">&#9832;</b> Yummy</h1>
     <h1>Food Truck</h1>
       </div>    
<form method="post" action="foodTruck.php" name="foodOrderFrom"> 
<table>
<tr>
<td width="30%" align="center" style="color:green">Item Name</td>
<td width="23%" align="left" style="color:green">Price</td>
<td width="27%" align="left" style="color:green">Quantity</td>
<td width="30%" align="left" style="color:green">Subtotal</td>
</tr>

<tr>
<td>FRANK HOT DOG</td>
<td>$ 5.50 / each</td>
<td><input type='number' name='fq' min='0' id="frankdog_qty" oninput="frankdog_sTotal()"></td>
<td><span name='fs' id="frankdog_subtotal" oninput="frankdog_subtotal"  align="center" style="color:red"></span></td>
</tr>
    
<tr>
<td>PORK</td>
<td>$ 7.00 / each</td>
<td><input type='number' name='pq' min='0' id="pork_qty" oninput="pork_sTotal()"></td>
<td><span name='ps' id="pork_subtotal" oninput="pork_subtotal"  align="center" style="color:red"></span></td>
</tr>

<tr>
<td>CHICKEN</td>
<td>$ 10.50 / each</td>
<td><input type='number' name='cq' min='0' id="chicken_qty" oninput="chicken_sTotal()"></td>
<td><span name='cs' id="chicken_subtotal" oninput="chicken_subtotal" align="center" style="color:red" ></span></td>  
</tr>
</tr>

<tr>
<td>BRISKET</td>
<td>$ 6.50 / each</td>
<td><input type='number' name='bq' min='0' id="brisket_qty" oninput="brisket_sTotal()"></td>
<td><span name='bs' id="brisket_subtotal" oninput="brisket_subtotal" align="center" style="color:red"></span></td>
</tr>

<tr>
<td>RIBS</td>
<td>$ 8.50 / each</td>
<td><input type='number' name='rq' min='0' id="ribs_qty" oninput="ribs_sTotal()"></td>
<td><span name='rs' id="ribs_subtotal" oninput="ribs_subtotal"  align="center" style="color:red"></span></td>
</tr>

<tr>
<td style="color:green">Total Selected Items</td>
<?php
//sum of selected items counting start here
$frankdog = $_POST['fq'];//fq is the name of input
$pork = $_POST['pq'];
$chicken = $_POST['cq'];
$brisket = $_POST['bq'];
$ribs = $_POST['rq'];
$sumItems = $frankdog + $pork + $chicken + $brisket + $ribs;//sum of selected items 

//sum of Total start counting here
$frankdog_subtotal = $_GET['frankdog_subtotal'];//fq is the name of input
$pork_subtotal = $_GET['pork_subtotal'];
$chicken_subtotal = $_GET['chicken_subtotal'];
$brisket_subtotal = $_GET['brisket_subtotal'];
$ribs_subtotal = $_GET['ribs_subtotal'];
$sumTotal = $frankdog_subtotal + $pork_subtotal + $chicken_subtotal + $brisket_subtotal + $ribs_subtotal;//sum of selected items


echo '<td>'  . $sumItems .  '</td>';
echo '<td style="color:green">Your Total Will be</td>';
echo '<td>'  . $sumTotal .  '</td>';

?>
<td><output id="total"/><span name='ts' id='total' style="color:red" oninput="total()" ></span></td>
</tr>
<tr>
<td><input type='submit' name="submit" value="Submit" /></a></td>
</tr>    

<tr>
<td><a href="payment.php" ><input type='button' name="pay" value="Pay Here" style="color:green"/></a></td>
</tr>

</table>

 </form>  
    
<script>
function frankdog_sTotal() {//get frankdog_sTotal
 var frankdog_price = 5.5;    
    var ft = document.getElementById("frankdog_qty").value;
    var fs = ft * frankdog_price;    
    document.getElementById("frankdog_subtotal").innerHTML = "$" + parseFloat(Math.round(fs * 100) / 100).toFixed(2);     
    
}   
  
    function pork_sTotal(){//get pork_sTotal
    var pork_price = 7;
    var pt = document.getElementById("pork_qty").value;
    var ps = pt * pork_price;
     document.getElementById("pork_subtotal").innerHTML = "$" + parseFloat(Math.round(ps * 100) / 100).toFixed(2); 
        
    }
    function chicken_sTotal(){//get chicken_sTotal
     var chicken_price = 10.5;
     var ct = document.getElementById("chicken_qty").value;
    var cs = ct * chicken_price;
         document.getElementById("chicken_subtotal").innerHTML = "$" + parseFloat(Math.round(cs * 100) / 100).toFixed(2); 
        
    }
    function brisket_sTotal(){//get brisket_sTotal
    var brisket_price = 6.5; 
    var bt = document.getElementById("brisket_qty").value;
    var bs = bt * brisket_price;
        document.getElementById("brisket_subtotal").innerHTML = "$" + parseFloat(Math.round(bs * 100) / 100).toFixed(2); 
    }
      function ribs_sTotal(){//get ribs_sTotal
   var ribs_price = 8.5;
   var rt = document.getElementById("ribs_qty").value;
   var rs = rt * ribs_price; 
        document.getElementById("ribs_subtotal").innerHTML = "$" + parseFloat(Math.round(rs * 100) / 100).toFixed(2); 
      }
	  
	  function total(){//$(this).find("span").attr("id")	 
		  var fs = document.getElementById('frankdog_subtotal').value;
		  var ps = document.getElementById('pork_subtotal').value;
		  var cs = document.getElementById('chicken_subtotal').value;
		  var bs = document.getElementById('brisket_subtotal').value;
		  var rs = document.getElementById('ribs_subtotal').value;
		  var ts = fs + ps + cs + bs + rs;
		  
document.getElementsById('total').innerHTML = "$" + parseFloat(Math.round(ts * 100) / 100).toFixed(2); 	  
		  
		  }
    

    
</script>
</body>
</html>
