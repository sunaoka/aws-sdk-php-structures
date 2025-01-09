<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumUnits
 * @property int $MaximumUnits
 * @property bool $AutoScalingDisabled
 * @property string $AutoScalingRoleArn
 * @property AutoScalingPolicyUpdate $ScalingPolicyUpdate
 */
class AutoScalingSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     MinimumUnits?: int,
     *     MaximumUnits?: int,
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
