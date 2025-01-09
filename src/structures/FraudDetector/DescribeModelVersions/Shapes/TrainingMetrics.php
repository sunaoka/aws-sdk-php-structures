<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $auc
 * @property list<MetricDataPoint> $metricDataPoints
 */
class TrainingMetrics extends Shape
{
    /**
     * @param array{
     *     auc?: float,
     *     metricDataPoints?: list<MetricDataPoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
