<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsDbInstanceStorageConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class RdsDbInstanceStorage extends Shape
{
    /**
     * @param array{
     *     configuration?: RdsDbInstanceStorageConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
