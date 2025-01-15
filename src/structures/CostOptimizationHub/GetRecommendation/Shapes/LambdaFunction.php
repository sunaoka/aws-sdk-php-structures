<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunctionConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class LambdaFunction extends Shape
{
    /**
     * @param array{
     *     configuration?: LambdaFunctionConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
