<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeMetricAttribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $metricAttributionArn
 * @property string $datasetGroupArn
 * @property MetricAttributionOutput $metricsOutputConfig
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class MetricAttribution extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     metricAttributionArn?: string,
     *     datasetGroupArn?: string,
     *     metricsOutputConfig?: MetricAttributionOutput,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
