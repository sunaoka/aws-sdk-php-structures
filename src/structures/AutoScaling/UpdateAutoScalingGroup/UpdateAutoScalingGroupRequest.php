<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string|null $LaunchConfigurationName
 * @property Shapes\LaunchTemplateSpecification|null $LaunchTemplate
 * @property Shapes\MixedInstancesPolicy|null $MixedInstancesPolicy
 * @property int|null $MinSize
 * @property int|null $MaxSize
 * @property int|null $DesiredCapacity
 * @property int|null $DefaultCooldown
 * @property list<string>|null $AvailabilityZones
 * @property string|null $HealthCheckType
 * @property int|null $HealthCheckGracePeriod
 * @property string|null $PlacementGroup
 * @property string|null $VPCZoneIdentifier
 * @property list<string>|null $TerminationPolicies
 * @property bool|null $NewInstancesProtectedFromScaleIn
 * @property string|null $ServiceLinkedRoleARN
 * @property int|null $MaxInstanceLifetime
 * @property bool|null $CapacityRebalance
 * @property string|null $Context
 * @property string|null $DesiredCapacityType
 * @property int|null $DefaultInstanceWarmup
 * @property Shapes\InstanceMaintenancePolicy|null $InstanceMaintenancePolicy
 * @property Shapes\AvailabilityZoneDistribution|null $AvailabilityZoneDistribution
 * @property Shapes\AvailabilityZoneImpairmentPolicy|null $AvailabilityZoneImpairmentPolicy
 * @property bool|null $SkipZonalShiftValidation
 * @property Shapes\CapacityReservationSpecification|null $CapacityReservationSpecification
 * @property Shapes\InstanceLifecyclePolicy|null $InstanceLifecyclePolicy
 * @property 'none'|'prevent-force-deletion'|'prevent-all-deletion'|null $DeletionProtection
 */
class UpdateAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LaunchConfigurationName?: string|null,
     *     LaunchTemplate?: Shapes\LaunchTemplateSpecification|null,
     *     MixedInstancesPolicy?: Shapes\MixedInstancesPolicy|null,
     *     MinSize?: int|null,
     *     MaxSize?: int|null,
     *     DesiredCapacity?: int|null,
     *     DefaultCooldown?: int|null,
     *     AvailabilityZones?: list<string>|null,
     *     HealthCheckType?: string|null,
     *     HealthCheckGracePeriod?: int|null,
     *     PlacementGroup?: string|null,
     *     VPCZoneIdentifier?: string|null,
     *     TerminationPolicies?: list<string>|null,
     *     NewInstancesProtectedFromScaleIn?: bool|null,
     *     ServiceLinkedRoleARN?: string|null,
     *     MaxInstanceLifetime?: int|null,
     *     CapacityRebalance?: bool|null,
     *     Context?: string|null,
     *     DesiredCapacityType?: string|null,
     *     DefaultInstanceWarmup?: int|null,
     *     InstanceMaintenancePolicy?: Shapes\InstanceMaintenancePolicy|null,
     *     AvailabilityZoneDistribution?: Shapes\AvailabilityZoneDistribution|null,
     *     AvailabilityZoneImpairmentPolicy?: Shapes\AvailabilityZoneImpairmentPolicy|null,
     *     SkipZonalShiftValidation?: bool|null,
     *     CapacityReservationSpecification?: Shapes\CapacityReservationSpecification|null,
     *     InstanceLifecyclePolicy?: Shapes\InstanceLifecyclePolicy|null,
     *     DeletionProtection?: 'none'|'prevent-force-deletion'|'prevent-all-deletion'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
