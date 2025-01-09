<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ATIMetricDataPoint> $metricDataPoints
 * @property ATIModelPerformance $modelPerformance
 */
class ATITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<ATIMetricDataPoint>,
     *     modelPerformance?: ATIModelPerformance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
