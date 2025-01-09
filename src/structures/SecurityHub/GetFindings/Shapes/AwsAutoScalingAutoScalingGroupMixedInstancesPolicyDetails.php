<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyInstancesDistributionDetails $InstancesDistribution
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyLaunchTemplateDetails $LaunchTemplate
 */
class AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails extends Shape
{
    /**
     * @param array{
     *     InstancesDistribution?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyInstancesDistributionDetails,
     *     LaunchTemplate?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyLaunchTemplateDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
