<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property AutoScalingTargetTrackingScalingPolicyConfigurationDescription $TargetTrackingScalingPolicyConfiguration
 */
class AutoScalingPolicyDescription extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     TargetTrackingScalingPolicyConfiguration?: AutoScalingTargetTrackingScalingPolicyConfigurationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
