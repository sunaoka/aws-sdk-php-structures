<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetLaunchTemplateSpecificationRequest $LaunchTemplateSpecification
 * @property list<FleetLaunchTemplateOverridesRequest> $Overrides
 */
class FleetLaunchTemplateConfigRequest extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: FleetLaunchTemplateSpecificationRequest,
     *     Overrides?: list<FleetLaunchTemplateOverridesRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
