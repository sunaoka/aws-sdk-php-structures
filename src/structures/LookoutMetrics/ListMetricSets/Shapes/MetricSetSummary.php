<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListMetricSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricSetArn
 * @property string|null $AnomalyDetectorArn
 * @property string|null $MetricSetDescription
 * @property string|null $MetricSetName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property array<string, string>|null $Tags
 */
class MetricSetSummary extends Shape
{
    /**
     * @param array{
     *     MetricSetArn?: string|null,
     *     AnomalyDetectorArn?: string|null,
     *     MetricSetDescription?: string|null,
     *     MetricSetName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
