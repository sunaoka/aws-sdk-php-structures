<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $LaunchConfigurationName
 * @property Shapes\LaunchTemplateSpecification $LaunchTemplate
 * @property Shapes\MixedInstancesPolicy $MixedInstancesPolicy
 * @property string $InstanceId
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property int $DefaultCooldown
 * @property list<string> $AvailabilityZones
 * @property list<string> $LoadBalancerNames
 * @property list<string> $TargetGroupARNs
 * @property string $HealthCheckType
 * @property int $HealthCheckGracePeriod
 * @property string $PlacementGroup
 * @property string $VPCZoneIdentifier
 * @property list<string> $TerminationPolicies
 * @property bool $NewInstancesProtectedFromScaleIn
 * @property bool $CapacityRebalance
 * @property list<Shapes\LifecycleHookSpecification> $LifecycleHookSpecificationList
 * @property list<Shapes\Tag> $Tags
 * @property string $ServiceLinkedRoleARN
 * @property int $MaxInstanceLifetime
 * @property string $Context
 * @property string $DesiredCapacityType
 * @property int $DefaultInstanceWarmup
 * @property list<Shapes\TrafficSourceIdentifier> $TrafficSources
 * @property Shapes\InstanceMaintenancePolicy $InstanceMaintenancePolicy
 * @property Shapes\AvailabilityZoneDistribution $AvailabilityZoneDistribution
 * @property Shapes\AvailabilityZoneImpairmentPolicy $AvailabilityZoneImpairmentPolicy
 * @property bool $SkipZonalShiftValidation
 * @property Shapes\CapacityReservationSpecification $CapacityReservationSpecification
 */
class CreateAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LaunchConfigurationName?: string,
     *     LaunchTemplate?: Shapes\LaunchTemplateSpecification,
     *     MixedInstancesPolicy?: Shapes\MixedInstancesPolicy,
     *     InstanceId?: string,
     *     MinSize: int,
     *     MaxSize: int,
     *     DesiredCapacity?: int,
     *     DefaultCooldown?: int,
     *     AvailabilityZones?: list<string>,
     *     LoadBalancerNames?: list<string>,
     *     TargetGroupARNs?: list<string>,
     *     HealthCheckType?: string,
     *     HealthCheckGracePeriod?: int,
     *     PlacementGroup?: string,
     *     VPCZoneIdentifier?: string,
     *     TerminationPolicies?: list<string>,
     *     NewInstancesProtectedFromScaleIn?: bool,
     *     CapacityRebalance?: bool,
     *     LifecycleHookSpecificationList?: list<Shapes\LifecycleHookSpecification>,
     *     Tags?: list<Shapes\Tag>,
     *     ServiceLinkedRoleARN?: string,
     *     MaxInstanceLifetime?: int,
     *     Context?: string,
     *     DesiredCapacityType?: string,
     *     DefaultInstanceWarmup?: int,
     *     TrafficSources?: list<Shapes\TrafficSourceIdentifier>,
     *     InstanceMaintenancePolicy?: Shapes\InstanceMaintenancePolicy,
     *     AvailabilityZoneDistribution?: Shapes\AvailabilityZoneDistribution,
     *     AvailabilityZoneImpairmentPolicy?: Shapes\AvailabilityZoneImpairmentPolicy,
     *     SkipZonalShiftValidation?: bool,
     *     CapacityReservationSpecification?: Shapes\CapacityReservationSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
