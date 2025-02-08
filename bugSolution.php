function foo(array $arr): array {
  // The function is supposed to return an array containing only the unique elements from the input array.
  //This version uses strict comparison to correctly handle mixed data types
  $unique = [];
  foreach ($arr as $val) {
    if (!in_array($val, $unique, true)) {
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

//The bug is fixed, the function now correctly handles arrays with mixed data types
$arr = [1, '1', 2, '2'];
$uniqueArr = foo($arr);
print_r($uniqueArr); // Output: Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 2 )
