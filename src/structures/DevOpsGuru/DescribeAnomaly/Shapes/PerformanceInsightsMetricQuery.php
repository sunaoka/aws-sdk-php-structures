<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 * @property PerformanceInsightsMetricDimensionGroup|null $GroupBy
 * @property array<string, string>|null $Filter
 */
class PerformanceInsightsMetricQuery extends Shape
{
    /**
     * @param array{
     *     Metric?: string|null,
     *     GroupBy?: PerformanceInsightsMetricDimensionGroup|null,
     *     Filter?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
