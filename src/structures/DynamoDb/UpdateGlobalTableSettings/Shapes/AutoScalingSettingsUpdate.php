<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MinimumUnits
 * @property int<1, max>|null $MaximumUnits
 * @property bool|null $AutoScalingDisabled
 * @property string|null $AutoScalingRoleArn
 * @property AutoScalingPolicyUpdate|null $ScalingPolicyUpdate
 */
class AutoScalingSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     MinimumUnits?: int<1, max>|null,
     *     MaximumUnits?: int<1, max>|null,
     *     AutoScalingDisabled?: bool|null,
     *     AutoScalingRoleArn?: string|null,
     *     ScalingPolicyUpdate?: AutoScalingPolicyUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
