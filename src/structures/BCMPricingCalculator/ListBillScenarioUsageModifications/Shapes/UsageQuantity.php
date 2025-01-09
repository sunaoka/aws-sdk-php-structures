<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioUsageModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startHour
 * @property string $unit
 * @property double $amount
 */
class UsageQuantity extends Shape
{
    /**
     * @param array{
     *     startHour?: \Aws\Api\DateTimeResult,
     *     unit?: string,
     *     amount?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
