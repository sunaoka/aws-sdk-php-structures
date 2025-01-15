<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowestPrice'|'diversified'|'capacityOptimized'|'capacityOptimizedPrioritized'|'priceCapacityOptimized'|null $AllocationStrategy
 * @property 'lowestPrice'|'prioritized'|null $OnDemandAllocationStrategy
 * @property SpotMaintenanceStrategies|null $SpotMaintenanceStrategies
 * @property string|null $ClientToken
 * @property 'noTermination'|'default'|null $ExcessCapacityTerminationPolicy
 * @property double|null $FulfilledCapacity
 * @property double|null $OnDemandFulfilledCapacity
 * @property string $IamFleetRole
 * @property list<SpotFleetLaunchSpecification>|null $LaunchSpecifications
 * @property list<LaunchTemplateConfig>|null $LaunchTemplateConfigs
 * @property string|null $SpotPrice
 * @property int $TargetCapacity
 * @property int|null $OnDemandTargetCapacity
 * @property string|null $OnDemandMaxTotalPrice
 * @property string|null $SpotMaxTotalPrice
 * @property bool|null $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property bool|null $ReplaceUnhealthyInstances
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 * @property LoadBalancersConfig|null $LoadBalancersConfig
 * @property int|null $InstancePoolsToUseCount
 * @property string|null $Context
 * @property 'vcpu'|'memory-mib'|'units'|null $TargetCapacityUnitType
 * @property list<TagSpecification>|null $TagSpecifications
 */
class SpotFleetRequestConfigData extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowestPrice'|'diversified'|'capacityOptimized'|'capacityOptimizedPrioritized'|'priceCapacityOptimized'|null,
     *     OnDemandAllocationStrategy?: 'lowestPrice'|'prioritized'|null,
     *     SpotMaintenanceStrategies?: SpotMaintenanceStrategies|null,
     *     ClientToken?: string|null,
     *     ExcessCapacityTerminationPolicy?: 'noTermination'|'default'|null,
     *     FulfilledCapacity?: double|null,
     *     OnDemandFulfilledCapacity?: double|null,
     *     IamFleetRole: string,
     *     LaunchSpecifications?: list<SpotFleetLaunchSpecification>|null,
     *     LaunchTemplateConfigs?: list<LaunchTemplateConfig>|null,
     *     SpotPrice?: string|null,
     *     TargetCapacity: int,
     *     OnDemandTargetCapacity?: int|null,
     *     OnDemandMaxTotalPrice?: string|null,
     *     SpotMaxTotalPrice?: string|null,
     *     TerminateInstancesWithExpiration?: bool|null,
     *     Type?: 'request'|'maintain'|'instant'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     ReplaceUnhealthyInstances?: bool|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null,
     *     LoadBalancersConfig?: LoadBalancersConfig|null,
     *     InstancePoolsToUseCount?: int|null,
     *     Context?: string|null,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units'|null,
     *     TagSpecifications?: list<TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
