<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2InstanceConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class Ec2Instance extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2InstanceConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
