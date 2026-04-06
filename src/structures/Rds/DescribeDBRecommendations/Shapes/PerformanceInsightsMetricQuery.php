<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetricDimensionGroup|null $GroupBy
 * @property string|null $Metric
 */
class PerformanceInsightsMetricQuery extends Shape
{
    /**
     * @param array{
     *     GroupBy?: PerformanceInsightsMetricDimensionGroup|null,
     *     Metric?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
