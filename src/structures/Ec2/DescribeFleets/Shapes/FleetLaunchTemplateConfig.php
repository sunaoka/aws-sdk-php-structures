<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification|null $LaunchTemplateSpecification
 * @property list<FleetLaunchTemplateOverrides>|null $Overrides
 */
class FleetLaunchTemplateConfig extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification|null,
     *     Overrides?: list<FleetLaunchTemplateOverrides>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
