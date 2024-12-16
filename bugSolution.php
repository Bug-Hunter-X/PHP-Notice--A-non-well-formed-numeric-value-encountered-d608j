function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle the non-numeric value appropriately
      //For example, you can log an error, skip the value, or throw an exception.
      error_log('Non-numeric value encountered: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; 