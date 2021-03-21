<?php

 $apiKey = "rzp_test_0uuPCqupmLWjns";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="50000" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Animal Aid"
    data-description="Donation"
    data-image=""
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

