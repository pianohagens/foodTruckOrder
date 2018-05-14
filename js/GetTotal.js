function frankdog_sTotal() {//get frankdog_sTotal
 var frankdog_price = 5.5;    
    var ft = document.getElementById("frankdog_qty").value;
    var fs = ft * frankdog_price;    
    document.getElementById("frankdog_subtotal").innerHTML = fs;    
    
}   
  
    function pork_sTotal(){//get pork_sTotal
    var pork_price = 7;
    var pt = document.getElementById("pork_qty").value;
    var ps = pt * pork_price;
     document.getElementById("pork_subtotal").innerHTML = ps;
        
    }
    function chicken_sTotal(){//get chicken_sTotal
     var chicken_price = 10.5;
     var ct = document.getElementById("chicken_qty").value;
    var cs = ct * chicken_price;
         document.getElementById("chicken_subtotal").innerHTML = cs;
        
    }
    function brisket_sTotal(){//get brisket_sTotal
    var brisket_price = 6.5; 
    var bt = document.getElementById("brisket_qty").value;
    var bs = bt * brisket_price;
        document.getElementById("brisket_subtotal").innerHTML = bs;
    }
      function ribs_sTotal(){//get ribs_sTotal
   var ribs_price = 8.5;
   var rt = document.getElementById("ribs_qty").value;
   var rs = rt * ribs_price; 
        document.getElementById("ribs_subtotal").innerHTML = rs;
      }
    
    function sumItem(){//sum for items
     var ft = frankdog_sTotal().document.getElementById("frankdog_qty").value;
        var pt = pork_sTotal().document.getElementById("pork_qty").value;
        var ct = chicken_sTotal().document.getElementById("chicken_qty").value;
        var bt = brisket_sTotal().document.getElementById("brisket_qty").value;
        var rt = ribs_sTotal().document.getElementById("ribs_qty").value;
        var sumItem = ft + pt + ct + bt + rt;        
        
      document.getElementById("sumItem").innerHTML = sumItem();        
    }
    /*
    function totalCharge(){//sum for charge
        
        
        document.getElementById("sumCharge").innerHTML = ;
    }
    
    */
  
    