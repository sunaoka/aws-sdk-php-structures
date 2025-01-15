<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetricQuery|null $PerformanceInsightsMetricQuery
 */
class MetricQuery extends Shape
{
    /**
     * @param array{PerformanceInsightsMetricQuery?: PerformanceInsightsMetricQuery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
