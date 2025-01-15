<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchReservedInstancesConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class OpenSearchReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: OpenSearchReservedInstancesConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
