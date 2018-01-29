<!DOCTYPE html>
<!-- assignment4/index.php -->

<!--
 * Class:       AD 320 WI 18
 * Author:      Danielle Coulter
 * Title:       index.java
 * Due Date:    Jan 25, 2018
 * 
 * Description: This programs asks the user to enter the square feet of wall 
 * space to be painted and the price of the paint per gallon in a HTML form.
 * 
 * 1 gal paint == 8 hrs labor && 115sqft 
 * 1 hr labor == $20
 -->

<html>
<head>
    <title>Paint Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<h1 align="center"> Paint Calculator </h1>
<div>
    <form>
        <table align="center">
            <tr>
                <td>How many square feet need to be painted? </td>
                <td><input name="sqft" type="text" value=""/></td>
            </tr>
            <tr>
                <td>What is the price/gallon of your paint?</td>
                <td><input name="paint_price" type="text" value=""/></td>
            </tr>
            
                <td colspan="4">
                      <input type="submit" align="center"> </td>
            </tr>

        </table>
    </form>

</div>
<?php

    //Square feet
    $sqft = $_GET['sqft'];
    //Price of paint
    $paint_price = $_GET['paint_price'];
    
    //declare variables
    $hour = 8;
    $wall = 115;
    $labor_per_hour = 20;
    
    if ($sqft && $paint_price){
        
        //calculate gallons needed, ROUND UP
        $gallons = ($sqft / $wall);
        $gallons_formatted = ceil($gallons);
        
        //Calculate cost of paint
        $paint_price = ($paint_price * $gallons_formatted);
        $paint_price_formatted = number_format($paint_price, 2);
        
        //Calculate total labor hours
        $total_labor_hours = number_format((($sqft / $wall) * $hour), 2);
        $total_labor_hours_formatted = ceil($total_labor_hours);
        
        //Total labor charges
        $total_labor_price = ($total_labor_hours_formatted * 20);
        $total_labor_price_formatted = "$".number_format($total_labor_price, 2);
        
        //Quote for entire job
        $total_price = ($total_labor_price + $paint_price_formatted);
        $total_price_formatted = "$".number_format($total_price, 2);
        
        ?>
<br>
<br>
<br>

<h1 align="center">Thank you for considering us!</h1>
<h2 align="center">Here's your quote:</h2>

                
<div>
    <form>
        <table align="center">
            <tr>
                <td>Number of gallons of paint required  (rounded): </td>
                <td><?php echo "$gallons_formatted gal<br/>";?></td>
            </tr>
            
            <tr><td>Hours of labor required (rounded):</td>
                <td><?php echo "$total_labor_hours_formatted hours<br/>";?></td>
            </tr>
            
            <tr><td>Cost of paint:</td>
                <td><?php echo "$$paint_price_formatted<br/>";?></td>
            </tr>
                
            <tr><td>Labor charges:</td>
                <td><?php echo "$total_labor_price_formatted <br/>";?></td>
            </tr>
                    
            <tr>
                <td>TOTAL COST of the Paint job: </td>
                <td><?php echo "$total_price_formatted <br/>";?></td>
            </tr>
         
        </table>
    </form>

</div>
<?php
}      
    
?>
</body>

</html>

