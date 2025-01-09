<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsReservedInstancesConfiguration $configuration
 * @property ReservedInstancesCostCalculation $costCalculation
 */
class RdsReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsReservedInstancesConfiguration,
     *     costCalculation?: ReservedInstancesCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
