<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ATIMetricDataPoint>|null $metricDataPoints
 * @property ATIModelPerformance|null $modelPerformance
 */
class ATITrainingMetricsValue extends Shape
{
    /**
     * @param array{
     *     metricDataPoints?: list<ATIMetricDataPoint>|null,
     *     modelPerformance?: ATIModelPerformance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
