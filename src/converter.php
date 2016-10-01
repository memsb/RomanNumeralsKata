<?php

class converter
{
    private $numerals = [
        1 => 'I',
        4 => 'IV',
        5 => 'V',
        9 => 'IX',
        10 => 'X',
        40 => 'XL',
        50 => 'L',
        90 => 'XC',
        100 => 'C',
        400 => 'CD',
        500 => 'D',
        900 => 'CM',
        1000 => 'M',
    ];

    public function __construct()
    {
        krsort($this->numerals);
    }

    /**
     * @param int $num
     * @return string
     */
    public function toNumeral(int $num)
    {
        $output = '';
        $remaining = $num;
        while ($remaining > 0) {
            list($value, $numeral) = $this->getNumeral($remaining);
            $remaining -= $value;
            $output .= $numeral;
        }

        return $output;
    }

    /**
     * @param $remaining
     * @return array
     */
    private function getNumeral(int $remaining): array
    {
        foreach ($this->numerals as $value => $numeral) {
            if ($remaining >= $value) {
                return [$value, $numeral];
            }
        }

        return [0, ''];
    }
}
