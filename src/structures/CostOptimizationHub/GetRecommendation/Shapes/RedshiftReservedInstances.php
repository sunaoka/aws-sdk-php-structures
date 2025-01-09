<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftReservedInstancesConfiguration $configuration
 * @property ReservedInstancesCostCalculation $costCalculation
 */
class RedshiftReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: RedshiftReservedInstancesConfiguration,
     *     costCalculation?: ReservedInstancesCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
