<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EcsServiceConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class EcsService extends Shape
{
    /**
     * @param array{
     *     configuration?: EcsServiceConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
