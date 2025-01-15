<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $disableScaleIn
 * @property int|null $scaleInCooldown
 * @property int|null $scaleOutCooldown
 * @property double $targetValue
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     disableScaleIn?: bool|null,
     *     scaleInCooldown?: int|null,
     *     scaleOutCooldown?: int|null,
     *     targetValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
