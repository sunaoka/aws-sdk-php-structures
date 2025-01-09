<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplate $LaunchTemplate
 * @property InstancesDistribution $InstancesDistribution
 */
class MixedInstancesPolicy extends Shape
{
    /**
     * @param array{
     *     LaunchTemplate?: LaunchTemplate,
     *     InstancesDistribution?: InstancesDistribution
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
