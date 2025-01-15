<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplate|null $LaunchTemplate
 * @property InstancesDistribution|null $InstancesDistribution
 */
class MixedInstancesPolicy extends Shape
{
    /**
     * @param array{
     *     LaunchTemplate?: LaunchTemplate|null,
     *     InstancesDistribution?: InstancesDistribution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
