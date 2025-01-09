<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $metricNamespace
 * @property string $metricName
 * @property string $metricValue
 * @property string $metricUnit
 * @property string $metricTimestamp
 */
class CloudwatchMetricAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     metricNamespace: string,
     *     metricName: string,
     *     metricValue: string,
     *     metricUnit: string,
     *     metricTimestamp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
