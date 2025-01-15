<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property AutoScalingTargetTrackingScalingPolicyConfigurationUpdate $TargetTrackingScalingPolicyConfiguration
 */
class AutoScalingPolicyUpdate extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     TargetTrackingScalingPolicyConfiguration: AutoScalingTargetTrackingScalingPolicyConfigurationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
