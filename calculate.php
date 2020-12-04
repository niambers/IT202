<!DOCTYPE html>
<html>
<body>
<?php
      $subtotal = $_POST['Subtotal'];
      $rate = $_POST['Gratuity'];
      $tip = $subtotal * ($rate / 100);
      $total = $subtotal + $tip;
      print $total;
      print $tip;
?>
</body>
</html>