<!DOCTYPE html>
<html>
<body>
<?php
      $sub = $_POST['sub'];
      $rate = $_POST['rate'];
      $tip = $sub * ($rate / 100);
      $total = $sub + $tip;
      //output
      echo "Tip: " . $tip;
      echo "<br>";
      echo "Total: " . $total;
?>
</body>
</html>