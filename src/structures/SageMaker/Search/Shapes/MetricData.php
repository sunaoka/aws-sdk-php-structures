<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property float|null $Value
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class MetricData extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Value?: float|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
