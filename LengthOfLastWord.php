<?php
class Solution {

  /**
   * @param String $s
   * @return Integer

   输入: "Hello World"
   输出: 5
   */
  function lengthOfLastWord($s) {
    $s = rtrim($s);
    $len = 0;
    for ($i = strlen($s) - 1; $i >= 0; $i--) {
      if ($s[$i] == " ") {
        return $len;
      }
      $len++;
    }
    return $len;
  }
}