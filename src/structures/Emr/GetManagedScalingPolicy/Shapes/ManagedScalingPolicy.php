<?php

namespace Sunaoka\Aws\Structures\Emr\GetManagedScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeLimits $ComputeLimits
 * @property int<1, 100> $UtilizationPerformanceIndex
 * @property 'DEFAULT'|'ADVANCED' $ScalingStrategy
 */
class ManagedScalingPolicy extends Shape
{
    /**
     * @param array{
     *     ComputeLimits?: ComputeLimits,
     *     UtilizationPerformanceIndex?: int<1, 100>,
     *     ScalingStrategy?: 'DEFAULT'|'ADVANCED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
