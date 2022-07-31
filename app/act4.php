<?php

function act_4($num_list) {
  // construct a new array
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}

// print_r(act_4(array(1,2,3,6,7,8)));





