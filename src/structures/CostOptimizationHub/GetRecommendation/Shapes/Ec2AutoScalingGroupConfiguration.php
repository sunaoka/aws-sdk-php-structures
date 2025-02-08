<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceConfiguration|null $instance
 * @property list<MixedInstanceConfiguration>|null $mixedInstances
 * @property 'SingleInstanceType'|'MixedInstanceTypes'|null $type
 * @property 'Prioritized'|'LowestPrice'|null $allocationStrategy
 */
class Ec2AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     instance?: InstanceConfiguration|null,
     *     mixedInstances?: list<MixedInstanceConfiguration>|null,
     *     type?: 'SingleInstanceType'|'MixedInstanceTypes'|null,
     *     allocationStrategy?: 'Prioritized'|'LowestPrice'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
