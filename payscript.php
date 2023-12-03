<?php
    $apiKey = "rzp_test_Z5PdUwrdxsBxJy";

    ?>



<form action="orders.php" method="POST">
<script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apiKey; ?>"
        data-amount="<?php echo $_POST['amount'] * 100;?>"
        data-currency="INR"
        data-id="<?php echo 'OID'.rand(10,100).'END';?>"
        
        data-name="Interior furniture and design"
        data-description="Furniture and Design"
        data-image=""
        data-prefill.name=""
        data-prefill.email=""
        data-prefill.contact=""
        data-theme.color="#F37254"
></script>
<input type="hidden" customer="Hidden Element" name="hidden">   
</form>