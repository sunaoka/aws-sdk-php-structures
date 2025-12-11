<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NatGatewayConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class NatGateway extends Shape
{
    /**
     * @param array{
     *     configuration?: NatGatewayConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
