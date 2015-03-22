<?php

use Litipk\BigNumbers\Decimal as Decimal;

/**
 * @group tan
 */
class DecimalTanTest extends PHPUnit_Framework_TestCase
{
    public function tanProvider() {
        // Some values providede by mathematica
        return array(
            array('1', '1.55740772465490', '14'),
            array('123.123', '0.68543903342472368', '17'),
            array('15000000000', '-0.95779983511717825557', '20')

        );
    }

    /**
     * @dataProvider tanProvider
     */
    public function testSimple($nr, $answer, $digits)
    {
        $x = Decimal::fromString($nr);
        $tanX = $x->tan($digits);
        $this->assertTrue(Decimal::fromString($answer)->equals($tanX));
    }
}
