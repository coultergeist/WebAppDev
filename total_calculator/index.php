<?php
//lab3.1/ch08_ex1/index.php

/*
 * Class:       AD 320 WI 18
 * Author:      Danielle Coulter
 * Title:       Index.php (used for lab3.1)
 * Due Date:    Jan 17, 2018
*/

$customer_type = filter_input(INPUT_POST, 'type');
$invoice_subtotal = filter_input(INPUT_POST, 'subtotal');

//Switch Statement

switch (strtoupper($customer_type)){
	
	case 'R':
		if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
        $discount_percent = .25;
        
		} else if ($invoice_subtotal >= 500) {
			$discount_percent = .3;
		} 
	break;
	
	case 'C':
	$discount_percent = .2;
	break;
	
	case 'T':
	if ($invoice_subtotal < 500) {
        $discount_percent = .4;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .5;
    } 
	break;
	
/*
	case null;
	if ($customer_type != is_numeric){
		echo "You must enter only numbers here. Please try again.";
	break;
*/
	
	default:
	$discount_percent = .1;
	break;
	
}//end switch

/*
///////If Statement////////////

if ($customer_type == 'R' || $customer_type =='r') {
    if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
        $discount_percent = .25;
        
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .3;
        
    } 
}//end R 

else if ($customer_type == 'C' || $customer_type =='c') {
        $discount_percent = .2;
    }

else if ($customer_type == 'T' || $customer_type =='t') {
    if ($invoice_subtotal < 500) {
        $discount_percent = .4;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .5;
    } 
}

else {
    $discount_percent = .1;
}//end all other users
*/

$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';

?>