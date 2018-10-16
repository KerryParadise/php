        
<!DOCTYPE html>

<html>
    <head>
        <title>Credit Card App</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        
        <style>

        input[type="text"] { width: 120px;}

            #mainDiv {
                margin: auto;
                background-color: darkgray;
                
            }

            #amountOwed {
                margin: 30;  
            }

            #interest {
                margin: auto;
            }
            #monthsToPay{
                
            }
            .pad{
                padding-left: 30px;
            }
			  .pad2{
				  margin-left: 18px;
			}
			  .pad3{
				  margin-left: 18px;
			  }
            h1 {
                padding:20px;
				text-align: center;
		    }
          .button{
				margin: 15px;  
            }
			.buttonDiv{
				margin-left:20px;
			}

        </style>
    </head>
<body>


    
    
    <div id="mainDiv">
        
    <h1>Credit Card</h1>
    
    <form action="cc.php" method="post">
        
		<p class="pad">Amount Owed <input type="text" name="amountOwed" class="pad3" style="margin-top:30px; margin-bottom:30px;"></p>    
		<p class="pad">Interest Rate &nbsp; &nbsp; <input type="text" name="interest" class="pad2" style="margin-top:30px; margin-bottom:30px;"></p>   
			
		<p class="pad">Monthly Payment <input type="text" name="monthlyPayment" style="margin-top:30px; margin-bottom:30px;"></p>    
	
			<div style="margin-left: 80px;"> 
			
				<input type="reset" class="button" name="reset">
			   <input type="submit"  value="Results" name="submit"  onclick="calculate()">
			   
			</div>  
			
			<div> 
			
			<?php
        
				
				$int = $_POST['interest'];
				$amtOwed = $_POST['amountOwed'];
				$monthly = $_POST['monthlyPayment'];
				 
					$interestPaid = $amtOwed * $int / 100 / 12;
					$leftPay = $amtOwed + $interestPaid - $monthly;
					echo $interestPaid;
					
				
				echo "<h3>Month &nbsp;  Interest Paid &nbsp; Left to Pay</h3>";
				
				
				$total =  $amtOwed;
				 
				for ($count=1; $amtOwed>0; $count++)
                {
					$total =  $total + $interestPaid + $monthly;
					
                $amtOwed = $amtOwed - $monthly;
                $interestPaid = $amtOwed * $int / 100 / 12;
                $amtOwed += $interestPaid;
				
                echo " &nbsp; &nbsp; &nbsp;" .$count . "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $" . number_format($interestPaid, 2,'.','') . " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $" . number_format($amtOwed, 2,'.','') . "<br /> <br />";
				
				
				
                
				
                }
                echo "<b>Total amount paid: </b>$" . number_format($total, 2,'.','') ;
				
			?>
			
			</div>
	
	
   </form> 
        &nbsp; &nbsp; &nbsp; &nbsp;

        
    </div> <!--closes main div-->






    </body>
</html>