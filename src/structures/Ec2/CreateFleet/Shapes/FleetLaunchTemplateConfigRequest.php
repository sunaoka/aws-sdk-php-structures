<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecificationRequest|null $LaunchTemplateSpecification
 * @property list<FleetLaunchTemplateOverridesRequest>|null $Overrides
 */
class FleetLaunchTemplateConfigRequest extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecificationRequest|null,
     *     Overrides?: list<FleetLaunchTemplateOverridesRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
