<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MemoryOverprovisioned'|'MemoryUnderprovisioned' $name
 * @property double $value
 */
class ReasonCodeSummary extends Shape
{
    /**
     * @param array{
     *     name?: 'MemoryOverprovisioned'|'MemoryUnderprovisioned',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
