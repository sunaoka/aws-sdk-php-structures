<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftReservedInstancesConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class RedshiftReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: RedshiftReservedInstancesConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
