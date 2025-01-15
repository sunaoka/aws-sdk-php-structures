<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsReservedInstancesConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class RdsReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsReservedInstancesConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
