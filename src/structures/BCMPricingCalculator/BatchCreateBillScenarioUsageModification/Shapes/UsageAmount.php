<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startHour
 * @property double $amount
 */
class UsageAmount extends Shape
{
    /**
     * @param array{
     *     startHour: \Aws\Api\DateTimeResult,
     *     amount: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
