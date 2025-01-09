<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DisableScaleIn
 * @property int $ScaleInCooldown
 * @property int $ScaleOutCooldown
 * @property double $TargetValue
 */
class AutoScalingTargetTrackingScalingPolicyConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     DisableScaleIn?: bool,
     *     ScaleInCooldown?: int,
     *     ScaleOutCooldown?: int,
     *     TargetValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
