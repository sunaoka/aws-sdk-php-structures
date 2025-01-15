<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyInstancesDistributionDetails|null $InstancesDistribution
 * @property AwsAutoScalingAutoScalingGroupMixedInstancesPolicyLaunchTemplateDetails|null $LaunchTemplate
 */
class AwsAutoScalingAutoScalingGroupMixedInstancesPolicyDetails extends Shape
{
    /**
     * @param array{
     *     InstancesDistribution?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyInstancesDistributionDetails|null,
     *     LaunchTemplate?: AwsAutoScalingAutoScalingGroupMixedInstancesPolicyLaunchTemplateDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
