<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2AutoScalingGroupConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class Ec2AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2AutoScalingGroupConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
