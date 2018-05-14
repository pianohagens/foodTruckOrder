<?php
//sum of selected items counting start here
$frankdog = $_POST['fq'];//fq is the name of input
$pork = $_POST['pq'];
$chicken = $_POST['cq'];
$brisket = $_POST['bq'];
$ribs = $_POST['rq'];
$sumItems = $frankdog + $pork + $chicken + $brisket + $ribs;//sum of selected items 
if(isset($_POST['submit'])){
 //if select vaule > 0, disply subTotal for each item.
    //sum of Total start counting here
  
$frankdog_subtotal = $_POST['frankdog_subtotal'];//'frankdog_subtotal' is the id of span
$pork_subtotal = $_POST['pork_subtotal'];
$chicken_subtotal = $_POST['chicken_subtotal'];
$brisket_subtotal = $_POST['brisket_subtotal'];
$ribs_subtotal = $_POST['ribs_subtotal'];  
$sumTotal = $frankdog_subtotal + $pork_subtotal + $chicken_subtotal + $brisket_subtotal + $ribs_subtotal;//sum of selected items
   
}





?>
<!DOCTYPE html>
<html>
<body>

<form method="post" action="oninput.php" name="foodOrderFrom"> 
<table>
<tr>
<td width="30%" align="center" style="color:green">Item Name</td>
<td width="18%" align="left" style="color:green">Price</td>
<td width="22%" align="left" style="color:green">Quantity</td>
<td width="35%" align="left" style="color:green">Subtotal</td>
</tr>

<tr>
<td>FRANK HOT DOG</td>
<td>$ 5.50/each</td>
<td><input type='number' name='fq' min='0' id="frankdog_qty" oninput="frankdog_sTotal()"></td>
<td><span id="frankdog_subtotal" oninput="frankdog_subtotal"  align="center" style="color:red"></span></td>
</tr>
    
<tr>
<td>PORK</td>
<td>$ 7.00/each</td>
<td><input type='number' name='pq' min='0' id="pork_qty" oninput="pork_sTotal()"></td>
<td><span id="pork_subtotal" oninput="pork_subtotal"  align="center" style="color:red"></span></td>
</tr>

<tr>
<td>CHICKEN</td>
<td>$ 10.50/each</td>
<td><input type='number' name='cq' min='0' id="chicken_qty" oninput="chicken_sTotal()"></td>
<td><span id="chicken_subtotal" oninput="chicken_subtotal" align="center" style="color:red" ></span></td>  
</tr>
</tr>

<tr>
<td>BRISKET</td>
<td>$ 6.50/each</td>
<td><input type='number' name='bq' min='0' id="brisket_qty" oninput="brisket_sTotal()"></td>
<td><span id="brisket_subtotal" oninput="brisket_subtotal" align="center" style="color:red"></span></td>
</tr>

<tr>
<td>RIBS</td>
<td>$ 8.50/each</td>
<td><input type='number' name='rq' min='0' id="ribs_qty" oninput="ribs_sTotal()"></td>
<td><span id="ribs_subtotal" oninput="ribs_subtotal"  align="center" style="color:red" ></span></td>
</tr>    
   

<tr>
<td style="color:green">Total Selected Items</td>
<td><input type='submit' name='si' id="sumItem" value="<?php echo $sumItems; ?>" oninput="sumItem()" /></td>
    
<td style="color:green">Total Charge</td>  
 <td><input type='submit' name='sc' id="sumCharge" value="<?php echo $sumTotal; ?>" oninput="sumItem()" /></td>    
</tr>


<tr>
<td><input type="submit" name="Submit" value="Check Out" ></td>
<td></td>
<td></td>
<td></td>

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
    
</script>
</body>
</html>