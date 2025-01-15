<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property list<\Aws\Api\DateTimeResult>|null $Timestamps
 * @property list<int>|null $Values
 */
class MetricDataResult extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>|null,
     *     Values?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
