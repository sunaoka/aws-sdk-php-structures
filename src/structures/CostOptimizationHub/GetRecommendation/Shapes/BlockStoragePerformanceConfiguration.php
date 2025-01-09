<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $iops
 * @property double $throughput
 */
class BlockStoragePerformanceConfiguration extends Shape
{
    /**
     * @param array{
     *     iops?: double,
     *     throughput?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
