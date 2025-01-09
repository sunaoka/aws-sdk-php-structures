<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Dimension
 * @property string $MetricName
 * @property double $Value
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class EdgeMetric extends Shape
{
    /**
     * @param array{
     *     Dimension?: string,
     *     MetricName?: string,
     *     Value?: double,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
