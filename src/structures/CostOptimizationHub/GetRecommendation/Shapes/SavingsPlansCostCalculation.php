<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansPricing $pricing
 */
class SavingsPlansCostCalculation extends Shape
{
    /**
     * @param array{pricing?: SavingsPlansPricing} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
