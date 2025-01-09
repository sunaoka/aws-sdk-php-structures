<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsDbInstanceStorageConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class RdsDbInstanceStorage extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsDbInstanceStorageConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
