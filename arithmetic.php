<style>
  body
  {
    background-color:maroon;  
    text-align:center;
    font-weight:bold;
    color:white;
    margin-top:300px;
    font-family:system-ui;
  }
</style>
<?php
echo "<big><body></body><big>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];

  if (isset($_POST['add'])) {
    $result = $num1 + $num2;
    echo "The sum of $num1 and $num2 is : $result";
  }
  elseif (isset($_POST['sub'])) {
    $result = $num1 - $num2;
    echo "The difference between $num1 and $num2 is : $result";
  }
  elseif (isset($_POST['mul'])) {
    $result = $num1 * $num2;
    echo "The product of $num1 and $num2 is : $result";
  }
  elseif (isset($_POST['div'])) {
    $result = $num1 / $num2;
    echo "The quotient of $num1 and $num2 is : $result";
  }
}
?>
