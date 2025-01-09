<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchPutMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int<0, max> $Step
 * @property double $Value
 */
class RawMetricData extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     Step?: int<0, max>,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
