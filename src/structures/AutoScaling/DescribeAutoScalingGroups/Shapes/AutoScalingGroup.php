<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingGroupName
 * @property string|null $AutoScalingGroupARN
 * @property string|null $LaunchConfigurationName
 * @property LaunchTemplateSpecification|null $LaunchTemplate
 * @property MixedInstancesPolicy|null $MixedInstancesPolicy
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property int|null $PredictedCapacity
 * @property int $DefaultCooldown
 * @property list<string> $AvailabilityZones
 * @property list<string>|null $LoadBalancerNames
 * @property list<string>|null $TargetGroupARNs
 * @property string $HealthCheckType
 * @property int|null $HealthCheckGracePeriod
 * @property list<Instance>|null $Instances
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<SuspendedProcess>|null $SuspendedProcesses
 * @property string|null $PlacementGroup
 * @property string|null $VPCZoneIdentifier
 * @property list<EnabledMetric>|null $EnabledMetrics
 * @property string|null $Status
 * @property list<TagDescription>|null $Tags
 * @property list<string>|null $TerminationPolicies
 * @property bool|null $NewInstancesProtectedFromScaleIn
 * @property string|null $ServiceLinkedRoleARN
 * @property int|null $MaxInstanceLifetime
 * @property bool|null $CapacityRebalance
 * @property WarmPoolConfiguration|null $WarmPoolConfiguration
 * @property int|null $WarmPoolSize
 * @property string|null $Context
 * @property string|null $DesiredCapacityType
 * @property int|null $DefaultInstanceWarmup
 * @property list<TrafficSourceIdentifier>|null $TrafficSources
 * @property InstanceMaintenancePolicy|null $InstanceMaintenancePolicy
 * @property AvailabilityZoneDistribution|null $AvailabilityZoneDistribution
 * @property AvailabilityZoneImpairmentPolicy|null $AvailabilityZoneImpairmentPolicy
 * @property CapacityReservationSpecification|null $CapacityReservationSpecification
 * @property InstanceLifecyclePolicy|null $InstanceLifecyclePolicy
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     AutoScalingGroupARN?: string|null,
     *     LaunchConfigurationName?: string|null,
     *     LaunchTemplate?: LaunchTemplateSpecification|null,
     *     MixedInstancesPolicy?: MixedInstancesPolicy|null,
     *     MinSize: int,
     *     MaxSize: int,
     *     DesiredCapacity: int,
     *     PredictedCapacity?: int|null,
     *     DefaultCooldown: int,
     *     AvailabilityZones: list<string>,
     *     LoadBalancerNames?: list<string>|null,
     *     TargetGroupARNs?: list<string>|null,
     *     HealthCheckType: string,
     *     HealthCheckGracePeriod?: int|null,
     *     Instances?: list<Instance>|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     SuspendedProcesses?: list<SuspendedProcess>|null,
     *     PlacementGroup?: string|null,
     *     VPCZoneIdentifier?: string|null,
     *     EnabledMetrics?: list<EnabledMetric>|null,
     *     Status?: string|null,
     *     Tags?: list<TagDescription>|null,
     *     TerminationPolicies?: list<string>|null,
     *     NewInstancesProtectedFromScaleIn?: bool|null,
     *     ServiceLinkedRoleARN?: string|null,
     *     MaxInstanceLifetime?: int|null,
     *     CapacityRebalance?: bool|null,
     *     WarmPoolConfiguration?: WarmPoolConfiguration|null,
     *     WarmPoolSize?: int|null,
     *     Context?: string|null,
     *     DesiredCapacityType?: string|null,
     *     DefaultInstanceWarmup?: int|null,
     *     TrafficSources?: list<TrafficSourceIdentifier>|null,
     *     InstanceMaintenancePolicy?: InstanceMaintenancePolicy|null,
     *     AvailabilityZoneDistribution?: AvailabilityZoneDistribution|null,
     *     AvailabilityZoneImpairmentPolicy?: AvailabilityZoneImpairmentPolicy|null,
     *     CapacityReservationSpecification?: CapacityReservationSpecification|null,
     *     InstanceLifecyclePolicy?: InstanceLifecyclePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
