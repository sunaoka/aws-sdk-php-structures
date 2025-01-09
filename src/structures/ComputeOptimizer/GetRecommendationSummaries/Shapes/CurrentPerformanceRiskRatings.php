<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $high
 * @property int $medium
 * @property int $low
 * @property int $veryLow
 */
class CurrentPerformanceRiskRatings extends Shape
{
    /**
     * @param array{
     *     high?: int,
     *     medium?: int,
     *     low?: int,
     *     veryLow?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
