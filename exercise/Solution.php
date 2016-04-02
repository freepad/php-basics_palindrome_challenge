<?php

// BEGIN (write your solution here)
function isPalindrome($word)
{
    $word2 = strtolower($word);
    return $word2 == strrev($word2);
}
// END
