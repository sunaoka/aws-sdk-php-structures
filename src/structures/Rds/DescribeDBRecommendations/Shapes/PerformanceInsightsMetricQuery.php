<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetricDimensionGroup $GroupBy
 * @property string $Metric
 */
class PerformanceInsightsMetricQuery extends Shape
{
    /**
     * @param array{
     *     GroupBy?: PerformanceInsightsMetricDimensionGroup,
     *     Metric?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
