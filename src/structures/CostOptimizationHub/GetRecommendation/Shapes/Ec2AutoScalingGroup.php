<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2AutoScalingGroupConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class Ec2AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2AutoScalingGroupConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
