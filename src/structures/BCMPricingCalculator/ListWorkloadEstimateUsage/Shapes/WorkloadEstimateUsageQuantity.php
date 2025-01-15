<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $unit
 * @property double|null $amount
 */
class WorkloadEstimateUsageQuantity extends Shape
{
    /**
     * @param array{
     *     unit?: string|null,
     *     amount?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
