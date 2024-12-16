function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; // contains a string
$sum = calculate_sum($numbers);
echo "Sum: " . $sum;