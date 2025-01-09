<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetric $PerformanceInsightsMetric
 */
class Data extends Shape
{
    /**
     * @param array{PerformanceInsightsMetric?: PerformanceInsightsMetric} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
