<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification|null $LaunchTemplateSpecification
 * @property FleetLaunchTemplateOverrides|null $Overrides
 */
class LaunchTemplateAndOverridesResponse extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification|null,
     *     Overrides?: FleetLaunchTemplateOverrides|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
