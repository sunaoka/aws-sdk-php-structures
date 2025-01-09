<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElastiCacheReservedInstancesConfiguration $configuration
 * @property ReservedInstancesCostCalculation $costCalculation
 */
class ElastiCacheReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: ElastiCacheReservedInstancesConfiguration,
     *     costCalculation?: ReservedInstancesCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
