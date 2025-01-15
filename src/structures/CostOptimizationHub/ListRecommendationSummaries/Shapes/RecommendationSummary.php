<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $group
 * @property double|null $estimatedMonthlySavings
 * @property int|null $recommendationCount
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     group?: string|null,
     *     estimatedMonthlySavings?: double|null,
     *     recommendationCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
