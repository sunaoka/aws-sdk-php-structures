<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled'|null $ActivityStatus
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $FleetId
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null $FleetState
 * @property string|null $ClientToken
 * @property 'no-termination'|'termination'|null $ExcessCapacityTerminationPolicy
 * @property double|null $FulfilledCapacity
 * @property double|null $FulfilledOnDemandCapacity
 * @property list<FleetLaunchTemplateConfig>|null $LaunchTemplateConfigs
 * @property TargetCapacitySpecification|null $TargetCapacitySpecification
 * @property bool|null $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property bool|null $ReplaceUnhealthyInstances
 * @property SpotOptions|null $SpotOptions
 * @property OnDemandOptions|null $OnDemandOptions
 * @property list<Tag>|null $Tags
 * @property list<DescribeFleetError>|null $Errors
 * @property list<DescribeFleetsInstances>|null $Instances
 * @property string|null $Context
 */
class FleetData extends Shape
{
    /**
     * @param array{
     *     ActivityStatus?: 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     FleetId?: string|null,
     *     FleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null,
     *     ClientToken?: string|null,
     *     ExcessCapacityTerminationPolicy?: 'no-termination'|'termination'|null,
     *     FulfilledCapacity?: double|null,
     *     FulfilledOnDemandCapacity?: double|null,
     *     LaunchTemplateConfigs?: list<FleetLaunchTemplateConfig>|null,
     *     TargetCapacitySpecification?: TargetCapacitySpecification|null,
     *     TerminateInstancesWithExpiration?: bool|null,
     *     Type?: 'request'|'maintain'|'instant'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     ReplaceUnhealthyInstances?: bool|null,
     *     SpotOptions?: SpotOptions|null,
     *     OnDemandOptions?: OnDemandOptions|null,
     *     Tags?: list<Tag>|null,
     *     Errors?: list<DescribeFleetError>|null,
     *     Instances?: list<DescribeFleetsInstances>|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
