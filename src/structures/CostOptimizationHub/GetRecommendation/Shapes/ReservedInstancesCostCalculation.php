<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservedInstancesPricing $pricing
 */
class ReservedInstancesCostCalculation extends Shape
{
    /**
     * @param array{pricing?: ReservedInstancesPricing} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
