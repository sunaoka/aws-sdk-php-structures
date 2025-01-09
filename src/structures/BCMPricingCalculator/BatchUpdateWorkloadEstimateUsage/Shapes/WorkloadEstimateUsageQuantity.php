<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $unit
 * @property double $amount
 */
class WorkloadEstimateUsageQuantity extends Shape
{
    /**
     * @param array{
     *     unit?: string,
     *     amount?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
