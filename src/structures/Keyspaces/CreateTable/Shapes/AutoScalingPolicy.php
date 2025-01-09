<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetTrackingScalingPolicyConfiguration $targetTrackingScalingPolicyConfiguration
 */
class AutoScalingPolicy extends Shape
{
    /**
     * @param array{targetTrackingScalingPolicyConfiguration?: TargetTrackingScalingPolicyConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
