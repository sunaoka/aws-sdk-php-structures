<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActionSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property RecommendedActionTotal $total
 */
class RecommendedActionSummary extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     total: RecommendedActionTotal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
