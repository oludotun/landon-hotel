<?php

namespace App\Service;

class DateCalculator
{
    public function yearsDifference($year) {
        $curYear = date('Y');
        return $curYear - $year;
    }
}