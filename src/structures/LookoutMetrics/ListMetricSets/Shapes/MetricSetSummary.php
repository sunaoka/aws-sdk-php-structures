<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListMetricSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricSetArn
 * @property string $AnomalyDetectorArn
 * @property string $MetricSetDescription
 * @property string $MetricSetName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property array<string, string> $Tags
 */
class MetricSetSummary extends Shape
{
    /**
     * @param array{
     *     MetricSetArn?: string,
     *     AnomalyDetectorArn?: string,
     *     MetricSetDescription?: string,
     *     MetricSetName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
