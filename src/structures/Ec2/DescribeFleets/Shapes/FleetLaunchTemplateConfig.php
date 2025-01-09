<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification $LaunchTemplateSpecification
 * @property list<FleetLaunchTemplateOverrides> $Overrides
 */
class FleetLaunchTemplateConfig extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification,
     *     Overrides?: list<FleetLaunchTemplateOverrides>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
