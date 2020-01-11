<?php
  function twoSum($nums, $target) {
    $result = array();
    $arrLen = count($nums);
    $sum = 0;
    for ($i = 0; $i < $arrLen; $i++) {
      for ($j = 0; $j < $arrLen; $j++) {
        if (!($i == $j)) {
          $sum = $nums[$i] + $nums[$j];
          if ($sum == $target) {
            array_push($result, $i, $j);
          }
        }
      }
    }

    return [$result[0], $result[1]];
  }

echo "<pre>";
print_r(twoSum( [124, 1, 2, 55, 5], 15));