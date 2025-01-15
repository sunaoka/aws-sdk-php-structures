<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $high
 * @property int|null $medium
 * @property int|null $low
 * @property int|null $veryLow
 */
class CurrentPerformanceRiskRatings extends Shape
{
    /**
     * @param array{
     *     high?: int|null,
     *     medium?: int|null,
     *     low?: int|null,
     *     veryLow?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
