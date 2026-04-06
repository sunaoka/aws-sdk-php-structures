<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'P90'|'P95'|'P99_5'|null $threshold
 * @property 'PERCENT_30'|'PERCENT_20'|'PERCENT_10'|'PERCENT_0'|null $headroom
 */
class CustomizableMetricParameters extends Shape
{
    /**
     * @param array{
     *     threshold?: 'P90'|'P95'|'P99_5'|null,
     *     headroom?: 'PERCENT_30'|'PERCENT_20'|'PERCENT_10'|'PERCENT_0'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
