<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $savingsPercentage
 */
class SummaryMetricsResult extends Shape
{
    /**
     * @param array{savingsPercentage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
