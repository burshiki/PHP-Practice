<?php

function act_6($n) {
    {
        $x = $n;
        $y = 1;
        while($x > $y)
        {
          $x = ($x + $y)/2;
          $y = $n/$x;
        }
        return $x;
      }
      print_r(act_6(16)."\n");
}