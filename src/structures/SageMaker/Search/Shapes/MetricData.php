<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property float $Value
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class MetricData extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Value?: float,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
