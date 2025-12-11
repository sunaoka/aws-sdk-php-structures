<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActionSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $recommendedActionCount
 * @property EstimatedMonthlySavings $estimatedMonthlySavings
 */
class RecommendedActionTotal extends Shape
{
    /**
     * @param array{
     *     recommendedActionCount: int,
     *     estimatedMonthlySavings: EstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
