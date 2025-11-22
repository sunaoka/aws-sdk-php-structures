<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string|null $LaunchConfigurationName
 * @property Shapes\LaunchTemplateSpecification|null $LaunchTemplate
 * @property Shapes\MixedInstancesPolicy|null $MixedInstancesPolicy
 * @property string|null $InstanceId
 * @property int $MinSize
 * @property int $MaxSize
 * @property int|null $DesiredCapacity
 * @property int|null $DefaultCooldown
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $LoadBalancerNames
 * @property list<string>|null $TargetGroupARNs
 * @property string|null $HealthCheckType
 * @property int|null $HealthCheckGracePeriod
 * @property string|null $PlacementGroup
 * @property string|null $VPCZoneIdentifier
 * @property list<string>|null $TerminationPolicies
 * @property bool|null $NewInstancesProtectedFromScaleIn
 * @property bool|null $CapacityRebalance
 * @property list<Shapes\LifecycleHookSpecification>|null $LifecycleHookSpecificationList
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ServiceLinkedRoleARN
 * @property int|null $MaxInstanceLifetime
 * @property string|null $Context
 * @property string|null $DesiredCapacityType
 * @property int|null $DefaultInstanceWarmup
 * @property list<Shapes\TrafficSourceIdentifier>|null $TrafficSources
 * @property Shapes\InstanceMaintenancePolicy|null $InstanceMaintenancePolicy
 * @property Shapes\AvailabilityZoneDistribution|null $AvailabilityZoneDistribution
 * @property Shapes\AvailabilityZoneImpairmentPolicy|null $AvailabilityZoneImpairmentPolicy
 * @property bool|null $SkipZonalShiftValidation
 * @property Shapes\CapacityReservationSpecification|null $CapacityReservationSpecification
 * @property Shapes\InstanceLifecyclePolicy|null $InstanceLifecyclePolicy
 */
class CreateAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LaunchConfigurationName?: string|null,
     *     LaunchTemplate?: Shapes\LaunchTemplateSpecification|null,
     *     MixedInstancesPolicy?: Shapes\MixedInstancesPolicy|null,
     *     InstanceId?: string|null,
     *     MinSize: int,
     *     MaxSize: int,
     *     DesiredCapacity?: int|null,
     *     DefaultCooldown?: int|null,
     *     AvailabilityZones?: list<string>|null,
     *     LoadBalancerNames?: list<string>|null,
     *     TargetGroupARNs?: list<string>|null,
     *     HealthCheckType?: string|null,
     *     HealthCheckGracePeriod?: int|null,
     *     PlacementGroup?: string|null,
     *     VPCZoneIdentifier?: string|null,
     *     TerminationPolicies?: list<string>|null,
     *     NewInstancesProtectedFromScaleIn?: bool|null,
     *     CapacityRebalance?: bool|null,
     *     LifecycleHookSpecificationList?: list<Shapes\LifecycleHookSpecification>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ServiceLinkedRoleARN?: string|null,
     *     MaxInstanceLifetime?: int|null,
     *     Context?: string|null,
     *     DesiredCapacityType?: string|null,
     *     DefaultInstanceWarmup?: int|null,
     *     TrafficSources?: list<Shapes\TrafficSourceIdentifier>|null,
     *     InstanceMaintenancePolicy?: Shapes\InstanceMaintenancePolicy|null,
     *     AvailabilityZoneDistribution?: Shapes\AvailabilityZoneDistribution|null,
     *     AvailabilityZoneImpairmentPolicy?: Shapes\AvailabilityZoneImpairmentPolicy|null,
     *     SkipZonalShiftValidation?: bool|null,
     *     CapacityReservationSpecification?: Shapes\CapacityReservationSpecification|null,
     *     InstanceLifecyclePolicy?: Shapes\InstanceLifecyclePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
