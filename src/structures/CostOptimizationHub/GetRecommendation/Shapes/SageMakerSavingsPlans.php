<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SageMakerSavingsPlansConfiguration|null $configuration
 * @property SavingsPlansCostCalculation|null $costCalculation
 */
class SageMakerSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: SageMakerSavingsPlansConfiguration|null,
     *     costCalculation?: SavingsPlansCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
