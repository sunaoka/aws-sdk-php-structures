<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OFIMetricDataPoint>|null $metricDataPoints
 * @property OFIModelPerformance|null $modelPerformance
 */
class OFITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<OFIMetricDataPoint>|null,
     *     modelPerformance?: OFIModelPerformance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
