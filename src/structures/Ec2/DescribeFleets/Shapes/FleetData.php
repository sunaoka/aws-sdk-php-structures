<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled' $ActivityStatus
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $FleetId
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying' $FleetState
 * @property string $ClientToken
 * @property 'no-termination'|'termination' $ExcessCapacityTerminationPolicy
 * @property double $FulfilledCapacity
 * @property double $FulfilledOnDemandCapacity
 * @property list<FleetLaunchTemplateConfig> $LaunchTemplateConfigs
 * @property TargetCapacitySpecification $TargetCapacitySpecification
 * @property bool $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant' $Type
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property bool $ReplaceUnhealthyInstances
 * @property SpotOptions $SpotOptions
 * @property OnDemandOptions $OnDemandOptions
 * @property list<Tag> $Tags
 * @property list<DescribeFleetError> $Errors
 * @property list<DescribeFleetsInstances> $Instances
 * @property string $Context
 */
class FleetData extends Shape
{
    /**
     * @param array{
     *     ActivityStatus?: 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled',
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     FleetId?: string,
     *     FleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying',
     *     ClientToken?: string,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination',
     *     FulfilledCapacity?: double,
     *     FulfilledOnDemandCapacity?: double,
     *     LaunchTemplateConfigs?: list<FleetLaunchTemplateConfig>,
     *     TargetCapacitySpecification?: TargetCapacitySpecification,
     *     TerminateInstancesWithExpiration?: bool,
     *     Type?: 'request'|'maintain'|'instant',
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     ReplaceUnhealthyInstances?: bool,
     *     SpotOptions?: SpotOptions,
     *     OnDemandOptions?: OnDemandOptions,
     *     Tags?: list<Tag>,
     *     Errors?: list<DescribeFleetError>,
     *     Instances?: list<DescribeFleetsInstances>,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
