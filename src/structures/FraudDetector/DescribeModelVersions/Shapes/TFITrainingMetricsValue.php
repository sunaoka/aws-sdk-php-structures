<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TFIMetricDataPoint> $metricDataPoints
 * @property TFIModelPerformance $modelPerformance
 */
class TFITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<TFIMetricDataPoint>,
     *     modelPerformance?: TFIModelPerformance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
