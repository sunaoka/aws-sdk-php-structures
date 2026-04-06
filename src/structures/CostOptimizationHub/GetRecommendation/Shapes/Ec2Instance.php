<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2InstanceConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class Ec2Instance extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2InstanceConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
