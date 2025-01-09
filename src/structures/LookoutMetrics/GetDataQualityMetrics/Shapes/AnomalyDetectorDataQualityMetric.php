<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property list<MetricSetDataQualityMetric> $MetricSetDataQualityMetricList
 */
class AnomalyDetectorDataQualityMetric extends Shape
{
    /**
     * @param array{
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     MetricSetDataQualityMetricList?: list<MetricSetDataQualityMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
