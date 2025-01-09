<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingGroupName
 * @property string $AutoScalingGroupARN
 * @property string $LaunchConfigurationName
 * @property LaunchTemplateSpecification $LaunchTemplate
 * @property MixedInstancesPolicy $MixedInstancesPolicy
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property int $PredictedCapacity
 * @property int $DefaultCooldown
 * @property list<string> $AvailabilityZones
 * @property list<string> $LoadBalancerNames
 * @property list<string> $TargetGroupARNs
 * @property string $HealthCheckType
 * @property int $HealthCheckGracePeriod
 * @property list<Instance> $Instances
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<SuspendedProcess> $SuspendedProcesses
 * @property string $PlacementGroup
 * @property string $VPCZoneIdentifier
 * @property list<EnabledMetric> $EnabledMetrics
 * @property string $Status
 * @property list<TagDescription> $Tags
 * @property list<string> $TerminationPolicies
 * @property bool $NewInstancesProtectedFromScaleIn
 * @property string $ServiceLinkedRoleARN
 * @property int $MaxInstanceLifetime
 * @property bool $CapacityRebalance
 * @property WarmPoolConfiguration $WarmPoolConfiguration
 * @property int $WarmPoolSize
 * @property string $Context
 * @property string $DesiredCapacityType
 * @property int $DefaultInstanceWarmup
 * @property list<TrafficSourceIdentifier> $TrafficSources
 * @property InstanceMaintenancePolicy $InstanceMaintenancePolicy
 * @property AvailabilityZoneDistribution $AvailabilityZoneDistribution
 * @property AvailabilityZoneImpairmentPolicy $AvailabilityZoneImpairmentPolicy
 * @property CapacityReservationSpecification $CapacityReservationSpecification
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     AutoScalingGroupARN?: string,
     *     LaunchConfigurationName?: string,
     *     LaunchTemplate?: LaunchTemplateSpecification,
     *     MixedInstancesPolicy?: MixedInstancesPolicy,
     *     MinSize: int,
     *     MaxSize: int,
     *     DesiredCapacity: int,
     *     PredictedCapacity?: int,
     *     DefaultCooldown: int,
     *     AvailabilityZones: list<string>,
     *     LoadBalancerNames?: list<string>,
     *     TargetGroupARNs?: list<string>,
     *     HealthCheckType: string,
     *     HealthCheckGracePeriod?: int,
     *     Instances?: list<Instance>,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     SuspendedProcesses?: list<SuspendedProcess>,
     *     PlacementGroup?: string,
     *     VPCZoneIdentifier?: string,
     *     EnabledMetrics?: list<EnabledMetric>,
     *     Status?: string,
     *     Tags?: list<TagDescription>,
     *     TerminationPolicies?: list<string>,
     *     NewInstancesProtectedFromScaleIn?: bool,
     *     ServiceLinkedRoleARN?: string,
     *     MaxInstanceLifetime?: int,
     *     CapacityRebalance?: bool,
     *     WarmPoolConfiguration?: WarmPoolConfiguration,
     *     WarmPoolSize?: int,
     *     Context?: string,
     *     DesiredCapacityType?: string,
     *     DefaultInstanceWarmup?: int,
     *     TrafficSources?: list<TrafficSourceIdentifier>,
     *     InstanceMaintenancePolicy?: InstanceMaintenancePolicy,
     *     AvailabilityZoneDistribution?: AvailabilityZoneDistribution,
     *     AvailabilityZoneImpairmentPolicy?: AvailabilityZoneImpairmentPolicy,
     *     CapacityReservationSpecification?: CapacityReservationSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
