<?php

namespace Sunaoka\Aws\Structures\Emr\PutManagedScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeLimits $ComputeLimits
 * @property int $UtilizationPerformanceIndex
 * @property 'DEFAULT'|'ADVANCED' $ScalingStrategy
 */
class ManagedScalingPolicy extends Shape
{
    /**
     * @param array{
     *     ComputeLimits?: ComputeLimits,
     *     UtilizationPerformanceIndex?: int,
     *     ScalingStrategy?: 'DEFAULT'|'ADVANCED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
