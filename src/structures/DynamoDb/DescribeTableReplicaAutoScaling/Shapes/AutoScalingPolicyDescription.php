<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property AutoScalingTargetTrackingScalingPolicyConfigurationDescription|null $TargetTrackingScalingPolicyConfiguration
 */
class AutoScalingPolicyDescription extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     TargetTrackingScalingPolicyConfiguration?: AutoScalingTargetTrackingScalingPolicyConfigurationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
