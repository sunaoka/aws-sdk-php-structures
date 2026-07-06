<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2005, 2120> $year
 * @property int<1, 12> $month
 */
class BillingPeriod extends Shape
{
    /**
     * @param array{
     *     year: int<2005, 2120>,
     *     month: int<1, 12>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
