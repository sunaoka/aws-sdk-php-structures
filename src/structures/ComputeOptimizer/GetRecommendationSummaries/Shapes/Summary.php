<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null $name
 * @property double|null $value
 * @property list<ReasonCodeSummary>|null $reasonCodeSummaries
 */
class Summary extends Shape
{
    /**
     * @param array{
     *     name?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null,
     *     value?: double|null,
     *     reasonCodeSummaries?: list<ReasonCodeSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
