<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $group
 * @property double|null $amount
 */
class BatchUpdateWorkloadEstimateUsageEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string|null,
     *     amount?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
