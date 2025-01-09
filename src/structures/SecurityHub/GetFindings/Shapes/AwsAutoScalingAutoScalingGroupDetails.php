<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchConfigurationName
 * @property list<string> $LoadBalancerNames
 * @property string $HealthCheckType
 * @property int $HealthCheckGracePeriod
 * @property string $CreatedTime
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails $MixedInstancesPolicy
 * @property list<AwsAutoScalingAutoScalingGroupAvailabilityZonesListDetails> $AvailabilityZones
 * @property AwsAutoScalingAutoScalingGroupLaunchTemplateLaunchTemplateSpecification $LaunchTemplate
 * @property bool $CapacityRebalance
 */
class AwsAutoScalingAutoScalingGroupDetails extends Shape
{
    /**
     * @param array{
     *     LaunchConfigurationName?: string,
     *     LoadBalancerNames?: list<string>,
     *     HealthCheckType?: string,
     *     HealthCheckGracePeriod?: int,
     *     CreatedTime?: string,
     *     MixedInstancesPolicy?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails,
     *     AvailabilityZones?: list<AwsAutoScalingAutoScalingGroupAvailabilityZonesListDetails>,
     *     LaunchTemplate?: AwsAutoScalingAutoScalingGroupLaunchTemplateLaunchTemplateSpecification,
     *     CapacityRebalance?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
