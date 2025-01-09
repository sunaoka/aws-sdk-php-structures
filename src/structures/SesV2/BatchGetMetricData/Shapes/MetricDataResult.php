<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<int> $Values
 */
class MetricDataResult extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>,
     *     Values?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
