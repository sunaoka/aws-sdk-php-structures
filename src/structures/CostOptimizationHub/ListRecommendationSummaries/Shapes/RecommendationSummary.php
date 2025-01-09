<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $group
 * @property double $estimatedMonthlySavings
 * @property int $recommendationCount
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     group?: string,
     *     estimatedMonthlySavings?: double,
     *     recommendationCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
