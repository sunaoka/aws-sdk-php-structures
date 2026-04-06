<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property string|null $WeightedCapacity
 * @property LaunchTemplateSpecification|null $LaunchTemplateSpecification
 * @property InstanceRequirements|null $InstanceRequirements
 */
class LaunchTemplateOverrides extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     WeightedCapacity?: string|null,
     *     LaunchTemplateSpecification?: LaunchTemplateSpecification|null,
     *     InstanceRequirements?: InstanceRequirements|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
