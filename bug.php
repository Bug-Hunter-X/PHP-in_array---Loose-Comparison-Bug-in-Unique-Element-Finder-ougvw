function foo(array $arr): array {
  // The function is supposed to return an array containing only the unique elements from the input array.
  // However, it contains a subtle bug that will cause it to sometimes return an empty array.

  $unique = [];
  foreach ($arr as $val) {
    if (!in_array($val, $unique)) {
      $unique[] = $val;
    }
  }
  return $unique;
}

// Example usage:
$arr = [1, 2, 2, 3, 4, 4, 5];
$uniqueArr = foo($arr);
print_r($uniqueArr); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

$arr = ['a', 'b', 'b', 'c', 'a'];
$uniqueArr = foo($arr);
print_r($uniqueArr); // Output: Array ( [0] => a [1] => b [2] => c )

//The bug occurs when the input array contains elements of different types, such as both strings and numbers.
$arr = [1, '1', 2, '2'];
$uniqueArr = foo($arr);
print_r($uniqueArr); //Output: Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 2 )

//The function uses in_array which performs loose comparison, causing it to not recognize the string '1' as equal to the integer 1.
