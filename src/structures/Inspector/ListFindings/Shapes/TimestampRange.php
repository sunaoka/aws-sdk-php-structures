<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $beginDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 */
class TimestampRange extends Shape
{
    /**
     * @param array{
     *     beginDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
