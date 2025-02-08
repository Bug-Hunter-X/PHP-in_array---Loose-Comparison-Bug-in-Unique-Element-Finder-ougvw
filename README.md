# PHP in_array() Loose Comparison Bug
This repository demonstrates a subtle bug in a PHP function designed to find unique elements in an array. The bug arises from the loose comparison nature of the in_array() function when dealing with mixed data types (e.g., integers and strings).  The solution showcases using strict comparison to correctly identify unique elements regardless of data type.

## Bug Description
The provided PHP function `foo()` aims to return an array containing only the unique elements from the input array. However, due to the use of `in_array()` with its default loose comparison, it incorrectly treats '1' as different from 1 (and similarly for other types). This leads to incorrect results when the input contains mixed data types.

## Solution
The solution addresses this issue by using the third parameter of `in_array()`, setting it to `true` to enable strict comparison. This ensures that elements of different types are correctly differentiated, leading to accurate identification of unique elements.