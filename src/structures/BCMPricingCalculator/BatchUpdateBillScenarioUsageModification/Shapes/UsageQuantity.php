<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $startHour
 * @property string|null $unit
 * @property double|null $amount
 */
class UsageQuantity extends Shape
{
    /**
     * @param array{
     *     startHour?: \Aws\Api\DateTimeResult|null,
     *     unit?: string|null,
     *     amount?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
