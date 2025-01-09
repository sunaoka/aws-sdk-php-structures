<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $group
 * @property double $amount
 */
class BatchUpdateWorkloadEstimateUsageEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string,
     *     amount?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
