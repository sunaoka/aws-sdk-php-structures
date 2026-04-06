<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Usage>|null $usages
 * @property ResourcePricing|null $pricing
 */
class ResourceCostCalculation extends Shape
{
    /**
     * @param array{
     *     usages?: list<Usage>|null,
     *     pricing?: ResourcePricing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
