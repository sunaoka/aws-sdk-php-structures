<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricName
 */
class MetricStreamStatisticsMetric extends Shape
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
