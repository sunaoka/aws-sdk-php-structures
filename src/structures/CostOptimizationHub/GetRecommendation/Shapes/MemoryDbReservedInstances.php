<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemoryDbReservedInstancesConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class MemoryDbReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: MemoryDbReservedInstancesConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
