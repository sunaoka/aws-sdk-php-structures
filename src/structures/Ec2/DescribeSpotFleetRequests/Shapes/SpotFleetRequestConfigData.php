<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowestPrice'|'diversified'|'capacityOptimized'|'capacityOptimizedPrioritized'|'priceCapacityOptimized' $AllocationStrategy
 * @property 'lowestPrice'|'prioritized' $OnDemandAllocationStrategy
 * @property SpotMaintenanceStrategies $SpotMaintenanceStrategies
 * @property string $ClientToken
 * @property 'noTermination'|'default' $ExcessCapacityTerminationPolicy
 * @property double $FulfilledCapacity
 * @property double $OnDemandFulfilledCapacity
 * @property string $IamFleetRole
 * @property list<SpotFleetLaunchSpecification> $LaunchSpecifications
 * @property list<LaunchTemplateConfig> $LaunchTemplateConfigs
 * @property string $SpotPrice
 * @property int $TargetCapacity
 * @property int $OnDemandTargetCapacity
 * @property string $OnDemandMaxTotalPrice
 * @property string $SpotMaxTotalPrice
 * @property bool $TerminateInstancesWithExpiration
 * @property 'request'|'maintain'|'instant' $Type
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property bool $ReplaceUnhealthyInstances
 * @property 'hibernate'|'stop'|'terminate' $InstanceInterruptionBehavior
 * @property LoadBalancersConfig $LoadBalancersConfig
 * @property int $InstancePoolsToUseCount
 * @property string $Context
 * @property 'vcpu'|'memory-mib'|'units' $TargetCapacityUnitType
 * @property list<TagSpecification> $TagSpecifications
 */
class SpotFleetRequestConfigData extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowestPrice'|'diversified'|'capacityOptimized'|'capacityOptimizedPrioritized'|'priceCapacityOptimized',
     *     OnDemandAllocationStrategy?: 'lowestPrice'|'prioritized',
     *     SpotMaintenanceStrategies?: SpotMaintenanceStrategies,
     *     ClientToken?: string,
     *     ExcessCapacityTerminationPolicy?: 'noTermination'|'default',
     *     FulfilledCapacity?: double,
     *     OnDemandFulfilledCapacity?: double,
     *     IamFleetRole: string,
     *     LaunchSpecifications?: list<SpotFleetLaunchSpecification>,
     *     LaunchTemplateConfigs?: list<LaunchTemplateConfig>,
     *     SpotPrice?: string,
     *     TargetCapacity: int,
     *     OnDemandTargetCapacity?: int,
     *     OnDemandMaxTotalPrice?: string,
     *     SpotMaxTotalPrice?: string,
     *     TerminateInstancesWithExpiration?: bool,
     *     Type?: 'request'|'maintain'|'instant',
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     ReplaceUnhealthyInstances?: bool,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate',
     *     LoadBalancersConfig?: LoadBalancersConfig,
     *     InstancePoolsToUseCount?: int,
     *     Context?: string,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units',
     *     TagSpecifications?: list<TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
