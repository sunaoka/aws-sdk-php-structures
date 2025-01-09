<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeSavingsPlansConfiguration $configuration
 * @property SavingsPlansCostCalculation $costCalculation
 */
class ComputeSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: ComputeSavingsPlansConfiguration,
     *     costCalculation?: SavingsPlansCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
