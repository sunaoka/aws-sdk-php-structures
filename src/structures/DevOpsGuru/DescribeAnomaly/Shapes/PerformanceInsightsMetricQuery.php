<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property PerformanceInsightsMetricDimensionGroup $GroupBy
 * @property array<string, string> $Filter
 */
class PerformanceInsightsMetricQuery extends Shape
{
    /**
     * @param array{
     *     Metric?: string,
     *     GroupBy?: PerformanceInsightsMetricDimensionGroup,
     *     Filter?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
