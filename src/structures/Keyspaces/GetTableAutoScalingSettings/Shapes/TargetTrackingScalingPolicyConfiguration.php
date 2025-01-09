<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $disableScaleIn
 * @property int $scaleInCooldown
 * @property int $scaleOutCooldown
 * @property double $targetValue
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     disableScaleIn?: bool,
     *     scaleInCooldown?: int,
     *     scaleOutCooldown?: int,
     *     targetValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
