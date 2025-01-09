<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchReservedInstancesConfiguration $configuration
 * @property ReservedInstancesCostCalculation $costCalculation
 */
class OpenSearchReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: OpenSearchReservedInstancesConfiguration,
     *     costCalculation?: ReservedInstancesCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
