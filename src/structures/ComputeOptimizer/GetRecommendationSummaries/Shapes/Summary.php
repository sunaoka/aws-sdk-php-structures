<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized' $name
 * @property double $value
 * @property list<ReasonCodeSummary> $reasonCodeSummaries
 */
class Summary extends Shape
{
    /**
     * @param array{
     *     name?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized',
     *     value?: double,
     *     reasonCodeSummaries?: list<ReasonCodeSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
