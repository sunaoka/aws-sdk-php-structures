<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $LaunchConfigurationName
 * @property Shapes\LaunchTemplateSpecification $LaunchTemplate
 * @property Shapes\MixedInstancesPolicy $MixedInstancesPolicy
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property int $DefaultCooldown
 * @property list<string> $AvailabilityZones
 * @property string $HealthCheckType
 * @property int $HealthCheckGracePeriod
 * @property string $PlacementGroup
 * @property string $VPCZoneIdentifier
 * @property list<string> $TerminationPolicies
 * @property bool $NewInstancesProtectedFromScaleIn
 * @property string $ServiceLinkedRoleARN
 * @property int $MaxInstanceLifetime
 * @property bool $CapacityRebalance
 * @property string $Context
 * @property string $DesiredCapacityType
 * @property int $DefaultInstanceWarmup
 * @property Shapes\InstanceMaintenancePolicy $InstanceMaintenancePolicy
 * @property Shapes\AvailabilityZoneDistribution $AvailabilityZoneDistribution
 * @property Shapes\AvailabilityZoneImpairmentPolicy $AvailabilityZoneImpairmentPolicy
 * @property bool $SkipZonalShiftValidation
 * @property Shapes\CapacityReservationSpecification $CapacityReservationSpecification
 */
class UpdateAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LaunchConfigurationName?: string,
     *     LaunchTemplate?: Shapes\LaunchTemplateSpecification,
     *     MixedInstancesPolicy?: Shapes\MixedInstancesPolicy,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     DesiredCapacity?: int,
     *     DefaultCooldown?: int,
     *     AvailabilityZones?: list<string>,
     *     HealthCheckType?: string,
     *     HealthCheckGracePeriod?: int,
     *     PlacementGroup?: string,
     *     VPCZoneIdentifier?: string,
     *     TerminationPolicies?: list<string>,
     *     NewInstancesProtectedFromScaleIn?: bool,
     *     ServiceLinkedRoleARN?: string,
     *     MaxInstanceLifetime?: int,
     *     CapacityRebalance?: bool,
     *     Context?: string,
     *     DesiredCapacityType?: string,
     *     DefaultInstanceWarmup?: int,
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
