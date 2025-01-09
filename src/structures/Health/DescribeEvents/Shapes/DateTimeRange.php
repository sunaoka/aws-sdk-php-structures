<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $from
 * @property \Aws\Api\DateTimeResult $to
 */
class DateTimeRange extends Shape
{
    /**
     * @param array{
     *     from?: \Aws\Api\DateTimeResult,
     *     to?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
