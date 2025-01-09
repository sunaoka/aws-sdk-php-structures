<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunctionConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class LambdaFunction extends Shape
{
    /**
     * @param array{
     *     configuration?: LambdaFunctionConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
