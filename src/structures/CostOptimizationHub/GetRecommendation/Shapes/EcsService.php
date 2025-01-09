<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EcsServiceConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class EcsService extends Shape
{
    /**
     * @param array{
     *     configuration?: EcsServiceConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
