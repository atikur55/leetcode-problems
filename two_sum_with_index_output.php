<?php

class Solution {
    public function twoSum($nums, $target) {

        $indexPoint = [];
        for ($i = 1; $i < count($nums); $i++) {
            $firstIndex  = $i - 1;
            $firstNumber = $nums[$firstIndex];

            for ($j = $i + 1; $j < count($nums) + 1; $j++) {
                $secondIndex  = $j - 1;
                $secondNumber = $nums[$secondIndex];
                if ($firstNumber + $secondNumber == $target) {
                    $indexPoint = [$firstIndex, $secondIndex];
                    break;
                }
            }
            if (count($indexPoint)) {
                break;
            }
        }

        return $indexPoint;
    }
}

$obj = new Solution();
print_r($obj->twoSum([3, 2, 4], 6));
