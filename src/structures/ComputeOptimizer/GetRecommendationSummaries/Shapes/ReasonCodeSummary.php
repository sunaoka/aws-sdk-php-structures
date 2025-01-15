<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MemoryOverprovisioned'|'MemoryUnderprovisioned'|null $name
 * @property double|null $value
 */
class ReasonCodeSummary extends Shape
{
    /**
     * @param array{
     *     name?: 'MemoryOverprovisioned'|'MemoryUnderprovisioned'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
