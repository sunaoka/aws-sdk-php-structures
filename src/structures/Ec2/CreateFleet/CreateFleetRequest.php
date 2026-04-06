<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property Shapes\SpotOptionsRequest|null $SpotOptions
 * @property Shapes\OnDemandOptionsRequest|null $OnDemandOptions
 * @property 'no-termination'|'termination'|null $ExcessCapacityTerminationPolicy
 * @property list<Shapes\FleetLaunchTemplateConfigRequest> $LaunchTemplateConfigs
 * @property Shapes\TargetCapacitySpecificationRequest $TargetCapacitySpecification
 * @property bool|null $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property bool|null $ReplaceUnhealthyInstances
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $Context
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     SpotOptions?: Shapes\SpotOptionsRequest|null,
     *     OnDemandOptions?: Shapes\OnDemandOptionsRequest|null,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination'|null,
     *     LaunchTemplateConfigs: list<Shapes\FleetLaunchTemplateConfigRequest>,
     *     TargetCapacitySpecification: Shapes\TargetCapacitySpecificationRequest,
     *     TerminateInstancesWithExpiration?: bool|null,
     *     Type?: 'request'|'maintain'|'instant'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     ReplaceUnhealthyInstances?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
