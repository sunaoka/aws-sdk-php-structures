<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property 'no-termination'|'termination' $ExcessCapacityTerminationPolicy
 * @property list<Shapes\FleetLaunchTemplateConfigRequest> $LaunchTemplateConfigs
 * @property string $FleetId
 * @property Shapes\TargetCapacitySpecificationRequest $TargetCapacitySpecification
 * @property string $Context
 */
class ModifyFleetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination',
     *     LaunchTemplateConfigs?: list<Shapes\FleetLaunchTemplateConfigRequest>,
     *     FleetId: string,
     *     TargetCapacitySpecification?: Shapes\TargetCapacitySpecificationRequest,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
