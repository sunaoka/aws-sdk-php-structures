<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecification|null $LaunchTemplateSpecification
 * @property list<LaunchTemplateOverrides>|null $Overrides
 */
class LaunchTemplateConfig extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecification|null,
     *     Overrides?: list<LaunchTemplateOverrides>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
