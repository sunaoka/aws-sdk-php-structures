<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchConfigurationName
 * @property list<string>|null $LoadBalancerNames
 * @property string|null $HealthCheckType
 * @property int|null $HealthCheckGracePeriod
 * @property string|null $CreatedTime
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails|null $MixedInstancesPolicy
 * @property list<AwsAutoScalingAutoScalingGroupAvailabilityZonesListDetails>|null $AvailabilityZones
 * @property AwsAutoScalingAutoScalingGroupLaunchTemplateLaunchTemplateSpecification|null $LaunchTemplate
 * @property bool|null $CapacityRebalance
 */
class AwsAutoScalingAutoScalingGroupDetails extends Shape
{
    /**
     * @param array{
     *     LaunchConfigurationName?: string|null,
     *     LoadBalancerNames?: list<string>|null,
     *     HealthCheckType?: string|null,
     *     HealthCheckGracePeriod?: int|null,
     *     CreatedTime?: string|null,
     *     MixedInstancesPolicy?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails|null,
     *     AvailabilityZones?: list<AwsAutoScalingAutoScalingGroupAvailabilityZonesListDetails>|null,
     *     LaunchTemplate?: AwsAutoScalingAutoScalingGroupLaunchTemplateLaunchTemplateSpecification|null,
     *     CapacityRebalance?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
