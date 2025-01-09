<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification $LaunchTemplateSpecification
 * @property list<LaunchTemplateOverrides> $Overrides
 */
class LaunchTemplateConfig extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification,
     *     Overrides?: list<LaunchTemplateOverrides>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
