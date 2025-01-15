<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetric|null $PerformanceInsightsMetric
 */
class Data extends Shape
{
    /**
     * @param array{PerformanceInsightsMetric?: PerformanceInsightsMetric|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
