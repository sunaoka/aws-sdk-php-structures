<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetricQuery $PerformanceInsightsMetricQuery
 */
class MetricQuery extends Shape
{
    /**
     * @param array{PerformanceInsightsMetricQuery?: PerformanceInsightsMetricQuery} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
