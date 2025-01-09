<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OFIMetricDataPoint> $metricDataPoints
 * @property OFIModelPerformance $modelPerformance
 */
class OFITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<OFIMetricDataPoint>,
     *     modelPerformance?: OFIModelPerformance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
