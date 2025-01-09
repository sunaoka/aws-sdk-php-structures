<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Usage> $usages
 * @property ResourcePricing $pricing
 */
class ResourceCostCalculation extends Shape
{
    /**
     * @param array{
     *     usages?: list<Usage>,
     *     pricing?: ResourcePricing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
