<?php
class Solution {

  /**
   * @param Integer $n
   * @return String[][]

   . Q . .
   . . . Q
   Q . . . 
   . . Q .
   
   res = [
      [
        0 => 1,
        1 => 3,
        2 => 0,
        3 => 2,
      ],
      [

      ],
   ],

   */
  public $cols = [];
  public $pie = [];
  public $na = [];
  public $res = [];
  function solveNQueens($n) {
    $this->solve([], $n, 0);
    return $this->generateAnswer($n);
  }

  function solve($answer, $n, $i) {
    if ($i == $n) {
      array_push($this->res, $answer);
      return;
    }
    for ($j = 0; $j < $n; $j++) {
      if (in_array($j, $this->cols) || in_array($i + $j, $this->pie) || in_array($i - $j + $n, $this->na)) {
        continue;
      }
      array_push($this->cols, $j);
      array_push($this->pie, $i + $j);
      array_push($this->na, $i - $j + $n);

      $answer[$i] = $j;
      $this->solve($answer, $n, $i + 1);

      array_pop($this->cols);
      array_pop($this->pie);
      array_pop($this->na);
    }
  }

  function generateAnswer($n) {
    $ret = [];
    if (!empty($this->res)) {
      foreach ($this->res as $v) {
        for ($i = 0; $i < $n; $i++) {
          $str = "";
          foreach ($v as $v1) {
            if ($v1 == $i) {
              $str .= "Q";
            } else {
              $str .= ".";
            }
          }
          array_push($ret, $str);
        }
      }
    }
    return array_chunk($ret, $n);
  }
}