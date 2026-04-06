<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeSavingsPlansConfiguration|null $configuration
 * @property SavingsPlansCostCalculation|null $costCalculation
 */
class ComputeSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: ComputeSavingsPlansConfiguration|null,
     *     costCalculation?: SavingsPlansCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
