<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SageMakerSavingsPlansConfiguration $configuration
 * @property SavingsPlansCostCalculation $costCalculation
 */
class SageMakerSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: SageMakerSavingsPlansConfiguration,
     *     costCalculation?: SavingsPlansCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
