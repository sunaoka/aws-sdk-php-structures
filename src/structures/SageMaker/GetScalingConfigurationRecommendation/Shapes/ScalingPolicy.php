<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetTrackingScalingPolicyConfiguration $TargetTracking
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{TargetTracking?: TargetTrackingScalingPolicyConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
