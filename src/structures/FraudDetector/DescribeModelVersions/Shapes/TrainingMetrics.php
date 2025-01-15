<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $auc
 * @property list<MetricDataPoint>|null $metricDataPoints
 */
class TrainingMetrics extends Shape
{
    /**
     * @param array{
     *     auc?: float|null,
     *     metricDataPoints?: list<MetricDataPoint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
