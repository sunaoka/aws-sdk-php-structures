<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumUnits
 * @property int $MaximumUnits
 * @property bool $AutoScalingDisabled
 * @property string $AutoScalingRoleArn
 * @property list<AutoScalingPolicyDescription> $ScalingPolicies
 */
class AutoScalingSettingsDescription extends Shape
{
    /**
     * @param array{
     *     MinimumUnits?: int,
     *     MaximumUnits?: int,
     *     AutoScalingDisabled?: bool,
     *     AutoScalingRoleArn?: string,
     *     ScalingPolicies?: list<AutoScalingPolicyDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
