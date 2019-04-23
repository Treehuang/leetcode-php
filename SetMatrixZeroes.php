<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL

      输入: 
      [
        [0,1,2,0],
        [3,4,5,2],
        [1,3,1,5]
      ]
      输出: 
      [
        [0,0,0,0],
        [0,4,5,0],
        [0,3,1,0]
      ]
     */
    function setZeroes(&$matrix) {
      $m = count($matrix);
      $n = count($matrix[0]);
      $first_row = false;
      for ($i = 0; $i < $n; $i++) {
        if ($matrix[0][$i] == 0) {
          $first_row = true;
          break;
        }
      }
      $first_col = false;
      for ($i = 0; $i < $m; $i++) {
        if ($matrix[$i][0] == 0) {
          $first_col = true;
          break;
        }
      }

      for ($i = 1; $i < $m; $i++) {
        for ($j = 1; $i < $n; $j++) {
          if ($matrix[$i][$j] == 0) {
            $matrix[$i][0] = 0;
            $matrix[0][$j] = 0;
          }
        }
      }

      for ($i = 1; $i < $n; $i++) {
        if ($matrix[0][$i] == 0) {
          for ($j = 0; $j < $m; $j++) {
            $matrix[$j][$i] = 0;
          }
        }
      }

      for ($j = 1; $j < $m; $j++) {
        if ($matrix[$j][0] == 0) {
          for ($i = 0; $i < $n; $i++) {
            $matrix[$j][$i] = 0;
          }
        }
      }

      if ($first_row) {
        for ($i = 0; $i < $n; $i++) {
          $matrix[0][$i] = 0;
        }
      }

      if ($first_col) {
        for ($i = 0; $i < $m; $i++) {
          $matrix[$i][0] = 0;
        }
      }

    }
}