<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuroraDbClusterStorageConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class AuroraDbClusterStorage extends Shape
{
    /**
     * @param array{
     *     configuration?: AuroraDbClusterStorageConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
