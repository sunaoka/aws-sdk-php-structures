<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Dimension
 * @property string|null $MetricName
 * @property double|null $Value
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class EdgeMetric extends Shape
{
    /**
     * @param array{
     *     Dimension?: string|null,
     *     MetricName?: string|null,
     *     Value?: double|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
