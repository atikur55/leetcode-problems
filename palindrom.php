<?php

class Solution {
    public function isPalindrome($x) {
        $numberSplit  = str_split($x);
        $reversNumber = [];
        for ($i = count($numberSplit); $i > 0; $i--) {
            $index          = $i - 1;
            $reversNumber[] = $numberSplit[$index];
        }

        $implodeReverseNumber = implode('', $reversNumber);

        if ($x == $implodeReverseNumber) {
            return true;
        } else {
            return false;
        }

    }
}

$obj = new Solution();
print_r($obj->isPalindrome(10));