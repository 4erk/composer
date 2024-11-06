<?php

namespace Composer;

class Calculator2 extends Calculator
{

    public function add($a, $b): float|int
    {
        return $b + $a;
    }
}
