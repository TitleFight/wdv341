<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Lou McDonald</title>

</head>

<body>
<h1>Lou McDonald Homework WDV341 12/27/20</h1>
<?php $yourName = "Lou McDonald";
      $number1 = 4;
      $number2 = 10;
      $total = 14;

      ?>
<h1><?php print htmlspecialchars('<h1>'); echo $yourName; print htmlspecialchars('</h1>');?></h1>
<h2><?php echo $yourName; ?></h2>
<p><?php echo $number1?>+<?php echo $number2?>=<?php echo $total?></p>


<script>
    <?php
        $php_array = array('PHP', 'HTML', 'JavaScript');
        $code_array = json_encode($php_array);
    ?>
    var array_code = <?php echo $code_array; ?>;
    document.write(array_code);
</script>



</body>
</html>
