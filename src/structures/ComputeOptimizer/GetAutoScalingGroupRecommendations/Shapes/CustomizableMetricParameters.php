<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'P90'|'P95'|'P99_5' $threshold
 * @property 'PERCENT_30'|'PERCENT_20'|'PERCENT_10'|'PERCENT_0' $headroom
 */
class CustomizableMetricParameters extends Shape
{
    /**
     * @param array{
     *     threshold?: 'P90'|'P95'|'P99_5',
     *     headroom?: 'PERCENT_30'|'PERCENT_20'|'PERCENT_10'|'PERCENT_0'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
