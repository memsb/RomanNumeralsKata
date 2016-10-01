<?php

namespace spec;

use converter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class converterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(converter::class);
    }

    function it_can_convert_decimal_0_into_numerals()
    {
        $this->toNumeral(0)->shouldReturn('');
    }

    function it_can_convert_decimal_1_into_numerals()
    {
        $this->toNumeral(1)->shouldReturn('I');
    }

    function it_can_convert_decimal_3_into_numerals()
    {
        $this->toNumeral(3)->shouldReturn('III');
    }

    function it_can_convert_decimal_4_into_numerals()
    {
        $this->toNumeral(4)->shouldReturn('IV');
    }

    function it_can_convert_decimal_5_into_numerals()
    {
        $this->toNumeral(5)->shouldReturn('V');
    }

    function it_can_convert_decimal_6_into_numerals()
    {
        $this->toNumeral(6)->shouldReturn('VI');
    }

    function it_can_convert_decimal_9_into_numerals()
    {
        $this->toNumeral(9)->shouldReturn('IX');
    }

    function it_can_convert_decimal_10_into_numerals()
    {
        $this->toNumeral(10)->shouldReturn('X');
    }

    function it_can_convert_decimal_50_into_numerals()
    {
        $this->toNumeral(50)->shouldReturn('L');
    }

    function it_can_convert_decimal_100_into_numerals()
    {
        $this->toNumeral(100)->shouldReturn('C');
    }

    function it_can_convert_decimal_500_into_numerals()
    {
        $this->toNumeral(500)->shouldReturn('D');
    }

    function it_can_convert_decimal_1000_into_numerals()
    {
        $this->toNumeral(1000)->shouldReturn('M');
    }

    function it_can_convert_decimal_999_into_numerals()
    {
        $this->toNumeral(999)->shouldReturn('CMXCIX');
    }
}
