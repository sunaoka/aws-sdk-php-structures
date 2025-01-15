<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property list<MetricSetDataQualityMetric>|null $MetricSetDataQualityMetricList
 */
class AnomalyDetectorDataQualityMetric extends Shape
{
    /**
     * @param array{
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     MetricSetDataQualityMetricList?: list<MetricSetDataQualityMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
