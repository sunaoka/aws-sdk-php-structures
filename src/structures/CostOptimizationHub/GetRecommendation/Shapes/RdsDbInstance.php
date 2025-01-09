<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsDbInstanceConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class RdsDbInstance extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsDbInstanceConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
