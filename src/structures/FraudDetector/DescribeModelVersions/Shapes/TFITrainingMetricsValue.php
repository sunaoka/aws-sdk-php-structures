<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TFIMetricDataPoint>|null $metricDataPoints
 * @property TFIModelPerformance|null $modelPerformance
 */
class TFITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<TFIMetricDataPoint>|null,
     *     modelPerformance?: TFIModelPerformance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
