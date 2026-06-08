<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCostCalculation|null $costCalculation
 */
class DynamoDbTable extends Shape
{
    /**
     * @param array{costCalculation?: ResourceCostCalculation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
