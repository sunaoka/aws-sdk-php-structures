<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsDbInstanceConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class RdsDbInstance extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsDbInstanceConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
