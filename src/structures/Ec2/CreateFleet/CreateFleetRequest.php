<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property Shapes\SpotOptionsRequest $SpotOptions
 * @property Shapes\OnDemandOptionsRequest $OnDemandOptions
 * @property 'no-termination'|'termination' $ExcessCapacityTerminationPolicy
 * @property list<Shapes\FleetLaunchTemplateConfigRequest> $LaunchTemplateConfigs
 * @property Shapes\TargetCapacitySpecificationRequest $TargetCapacitySpecification
 * @property bool $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant' $Type
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property bool $ReplaceUnhealthyInstances
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $Context
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     SpotOptions?: Shapes\SpotOptionsRequest,
     *     OnDemandOptions?: Shapes\OnDemandOptionsRequest,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination',
     *     LaunchTemplateConfigs: list<Shapes\FleetLaunchTemplateConfigRequest>,
     *     TargetCapacitySpecification: Shapes\TargetCapacitySpecificationRequest,
     *     TerminateInstancesWithExpiration?: bool,
     *     Type?: 'request'|'maintain'|'instant',
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     ReplaceUnhealthyInstances?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
