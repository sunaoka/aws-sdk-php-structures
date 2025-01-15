<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $iops
 * @property double|null $throughput
 */
class BlockStoragePerformanceConfiguration extends Shape
{
    /**
     * @param array{
     *     iops?: double|null,
     *     throughput?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
