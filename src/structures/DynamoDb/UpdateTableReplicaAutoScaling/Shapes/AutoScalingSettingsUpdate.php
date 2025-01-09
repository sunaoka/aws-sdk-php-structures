<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MinimumUnits
 * @property int<1, max> $MaximumUnits
 * @property bool $AutoScalingDisabled
 * @property string $AutoScalingRoleArn
 * @property AutoScalingPolicyUpdate $ScalingPolicyUpdate
 */
class AutoScalingSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     MinimumUnits?: int<1, max>,
     *     MaximumUnits?: int<1, max>,
     *     AutoScalingDisabled?: bool,
     *     AutoScalingRoleArn?: string,
     *     ScalingPolicyUpdate?: AutoScalingPolicyUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
