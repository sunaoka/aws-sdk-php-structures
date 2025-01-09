<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification $LaunchTemplateSpecification
 * @property FleetLaunchTemplateOverrides $Overrides
 */
class LaunchTemplateAndOverridesResponse extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification,
     *     Overrides?: FleetLaunchTemplateOverrides
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
