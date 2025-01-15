<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'no-termination'|'termination'|null $ExcessCapacityTerminationPolicy
 * @property list<Shapes\FleetLaunchTemplateConfigRequest>|null $LaunchTemplateConfigs
 * @property string $FleetId
 * @property Shapes\TargetCapacitySpecificationRequest|null $TargetCapacitySpecification
 * @property string|null $Context
 */
class ModifyFleetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination'|null,
     *     LaunchTemplateConfigs?: list<Shapes\FleetLaunchTemplateConfigRequest>|null,
     *     FleetId: string,
     *     TargetCapacitySpecification?: Shapes\TargetCapacitySpecificationRequest|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
