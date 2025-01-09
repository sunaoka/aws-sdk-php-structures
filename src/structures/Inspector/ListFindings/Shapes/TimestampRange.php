<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $beginDate
 * @property \Aws\Api\DateTimeResult $endDate
 */
class TimestampRange extends Shape
{
    /**
     * @param array{
     *     beginDate?: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
