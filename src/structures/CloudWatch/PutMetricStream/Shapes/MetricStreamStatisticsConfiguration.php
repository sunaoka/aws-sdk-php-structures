<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricStreamStatisticsMetric> $IncludeMetrics
 * @property list<string> $AdditionalStatistics
 */
class MetricStreamStatisticsConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludeMetrics: list<MetricStreamStatisticsMetric>,
     *     AdditionalStatistics: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
