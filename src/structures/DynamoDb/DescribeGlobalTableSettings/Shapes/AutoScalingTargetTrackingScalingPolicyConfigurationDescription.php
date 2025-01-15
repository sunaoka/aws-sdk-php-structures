<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DisableScaleIn
 * @property int|null $ScaleInCooldown
 * @property int|null $ScaleOutCooldown
 * @property double $TargetValue
 */
class AutoScalingTargetTrackingScalingPolicyConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     DisableScaleIn?: bool|null,
     *     ScaleInCooldown?: int|null,
     *     ScaleOutCooldown?: int|null,
     *     TargetValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
