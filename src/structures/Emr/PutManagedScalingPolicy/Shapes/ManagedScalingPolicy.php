<?php

namespace Sunaoka\Aws\Structures\Emr\PutManagedScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeLimits|null $ComputeLimits
 * @property int<1, 100>|null $UtilizationPerformanceIndex
 * @property 'DEFAULT'|'ADVANCED'|null $ScalingStrategy
 */
class ManagedScalingPolicy extends Shape
{
    /**
     * @param array{
     *     ComputeLimits?: ComputeLimits|null,
     *     UtilizationPerformanceIndex?: int<1, 100>|null,
     *     ScalingStrategy?: 'DEFAULT'|'ADVANCED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
