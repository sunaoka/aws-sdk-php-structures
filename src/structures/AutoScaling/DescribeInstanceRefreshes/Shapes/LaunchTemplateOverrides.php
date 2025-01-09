<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property string $WeightedCapacity
 * @property LaunchTemplateSpecification $LaunchTemplateSpecification
 * @property InstanceRequirements $InstanceRequirements
 */
class LaunchTemplateOverrides extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string,
     *     WeightedCapacity?: string,
     *     LaunchTemplateSpecification?: LaunchTemplateSpecification,
     *     InstanceRequirements?: InstanceRequirements
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
