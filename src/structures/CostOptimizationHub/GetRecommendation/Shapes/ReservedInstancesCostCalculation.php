<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservedInstancesPricing|null $pricing
 */
class ReservedInstancesCostCalculation extends Shape
{
    /**
     * @param array{pricing?: ReservedInstancesPricing|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
